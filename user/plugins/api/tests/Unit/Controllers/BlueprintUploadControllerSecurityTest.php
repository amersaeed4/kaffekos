<?php

declare(strict_types=1);

namespace Grav\Plugin\Api\Tests\Unit\Controllers;

use Grav\Common\Config\Config;
use Grav\Framework\Acl\Permissions;
use Grav\Plugin\Api\Controllers\BlueprintUploadController;
use Grav\Plugin\Api\Exceptions\ForbiddenException;
use Grav\Plugin\Api\Exceptions\ValidationException;
use Grav\Plugin\Api\Tests\Unit\TestHelper;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UploadedFileInterface;
use Psr\Http\Message\UriInterface;

/**
 * Regression coverage for GHSA-6xx2-m8wv-756h and adjacent file-write risks.
 */
#[CoversClass(BlueprintUploadController::class)]
class BlueprintUploadControllerSecurityTest extends TestCase
{
    private string $tempDir;
    private Config $config;

    protected function setUp(): void
    {
        $this->tempDir = sys_get_temp_dir() . '/grav_api_blueprint_upload_' . uniqid();
        mkdir($this->tempDir . '/accounts', 0775, true);
        mkdir($this->tempDir . '/config', 0775, true);
        mkdir($this->tempDir . '/media', 0775, true);
        mkdir($this->tempDir . '/plugins/api', 0775, true);
        mkdir($this->tempDir . '/themes/quark', 0775, true);
        foreach (['css', 'content', 'code'] as $dir) {
            mkdir($this->tempDir . '/themes/quark/' . $dir, 0775, true);
        }

        $this->config = new Config([
            'system' => ['pages' => ['theme' => 'quark']],
            'security' => [
                'uploads_dangerous_extensions' => ['php', 'phtml', 'phar', 'js', 'html'],
                'sanitize_svg' => true,
            ],
            'plugins' => ['api' => ['route' => '/api', 'version_prefix' => 'v1']],
        ]);
    }

    protected function tearDown(): void
    {
        $this->rmrf($this->tempDir);
    }

    #[Test]
    public function account_yaml_upload_is_rejected_for_media_write_user(): void
    {
        $controller = $this->buildController('alice', ['media' => ['write' => true]]);
        $request = $this->uploadRequest('alice', 'self@:', 'users/alice', 'evil.yaml', "access:\n  api:\n    super: true\n");

        $this->expectException(ValidationException::class);

        try {
            $controller->upload($request);
        } finally {
            self::assertFileDoesNotExist($this->tempDir . '/accounts/evil.yaml');
        }
    }

    #[Test]
    public function account_scope_accepts_avatar_image_for_self(): void
    {
        $controller = $this->buildController('alice', ['media' => ['write' => true]]);
        $request = $this->uploadRequest('alice', 'self@:', 'users/alice', 'avatar.png', 'png');

        $response = $controller->upload($request);

        self::assertSame(201, $response->getStatusCode());
        self::assertFileExists($this->tempDir . '/accounts/avatar.png');
        $payload = json_decode((string) $response->getBody(), true);
        self::assertSame('user/accounts/avatar.png', $payload['data'][0]['path'] ?? null);
    }

    #[Test]
    public function double_extension_disguised_as_image_is_rejected(): void
    {
        // "evil.php.png" passes a last-extension check (".png") but the ".php"
        // must still be caught — the double-extension bypass (GHSA-66v2-vxxf-xc3v).
        $controller = $this->buildController('alice', ['media' => ['write' => true]]);
        $request = $this->uploadRequest('alice', 'user://media', 'plugins/api', 'evil.php.png', '<?php evil();');

        $this->expectException(ValidationException::class);

        try {
            $controller->upload($request);
        } finally {
            self::assertFileDoesNotExist($this->tempDir . '/media/evil.php.png');
        }
    }

    #[Test]
    public function avatar_svg_is_sanitized_of_embedded_script(): void
    {
        // SVG avatars are allowed under user/accounts/ but must be stripped of
        // any executable <script> so they can't deliver stored XSS when served
        // inline as image/svg+xml (GHSA-7vhm-8x52-2r5p).
        $svg = '<svg xmlns="http://www.w3.org/2000/svg"><script>alert(document.cookie)</script>'
            . '<rect width="10" height="10"/></svg>';
        $controller = $this->buildController('alice', ['media' => ['write' => true]]);
        $request = $this->uploadRequest('alice', 'self@:', 'users/alice', 'avatar.svg', $svg);

        $response = $controller->upload($request);

        self::assertSame(201, $response->getStatusCode());
        $written = file_get_contents($this->tempDir . '/accounts/avatar.svg');
        self::assertStringNotContainsStringIgnoringCase('<script', $written);
        self::assertStringNotContainsStringIgnoringCase('alert(', $written);
    }

    #[Test]
    public function account_scope_rejects_cross_user_upload_without_users_write(): void
    {
        $controller = $this->buildController('alice', ['media' => ['write' => true]]);
        $request = $this->uploadRequest('alice', 'self@:', 'users/bob', 'avatar.png', 'png');

        $this->expectException(ForbiddenException::class);
        $controller->upload($request);
    }

    #[Test]
    public function config_directory_upload_is_rejected_even_for_images(): void
    {
        $controller = $this->buildController('alice', ['media' => ['write' => true]]);
        $request = $this->uploadRequest('alice', 'user://config/images', 'plugins/api', 'logo.png', 'png');

        $this->expectException(ForbiddenException::class);

        try {
            $controller->upload($request);
        } finally {
            self::assertFileDoesNotExist($this->tempDir . '/config/images/logo.png');
        }
    }

    #[Test]
    public function config_bearing_extension_is_rejected_outside_config_directories(): void
    {
        $controller = $this->buildController('alice', ['media' => ['write' => true]]);
        $request = $this->uploadRequest('alice', 'user://media', 'plugins/api', 'settings.yaml', 'enabled: true');

        $this->expectException(ValidationException::class);

        try {
            $controller->upload($request);
        } finally {
            self::assertFileDoesNotExist($this->tempDir . '/media/settings.yaml');
        }
    }

    #[Test]
    public function delete_rejects_account_yaml_and_leaves_file_intact(): void
    {
        file_put_contents($this->tempDir . '/accounts/admin.yaml', "access:\n  api:\n    super: true\n");
        $controller = $this->buildController('alice', ['media' => ['write' => true]]);

        $this->expectException(ForbiddenException::class);

        try {
            $controller->delete($this->deleteRequest('alice', 'user/accounts/admin.yaml'));
        } finally {
            self::assertFileExists($this->tempDir . '/accounts/admin.yaml');
        }
    }

    #[Test]
    public function delete_rejects_config_bearing_extension_outside_accounts(): void
    {
        file_put_contents($this->tempDir . '/plugins/api/blueprints.yaml', 'name: API');
        $controller = $this->buildController('alice', ['media' => ['write' => true]]);

        $this->expectException(ValidationException::class);

        try {
            $controller->delete($this->deleteRequest('alice', 'user/plugins/api/blueprints.yaml'));
        } finally {
            self::assertFileExists($this->tempDir . '/plugins/api/blueprints.yaml');
        }
    }

    #[Test]
    public function delete_rejects_page_content(): void
    {
        mkdir($this->tempDir . '/pages/01.home', 0775, true);
        file_put_contents($this->tempDir . '/pages/01.home/default.md', "---\ntitle: Home\n---\n");
        $controller = $this->buildController('alice', ['media' => ['write' => true]]);

        $this->expectException(ValidationException::class);

        try {
            $controller->delete($this->deleteRequest('alice', 'pages/01.home/default.md'));
        } finally {
            self::assertFileExists($this->tempDir . '/pages/01.home/default.md');
        }
    }

    #[Test]
    public function delete_rejects_theme_stylesheet(): void
    {
        file_put_contents($this->tempDir . '/themes/quark/custom.css', 'body{}');
        $controller = $this->buildController('alice', ['media' => ['write' => true]]);

        $this->expectException(ValidationException::class);

        try {
            $controller->delete($this->deleteRequest('alice', 'themes/quark/custom.css'));
        } finally {
            self::assertFileExists($this->tempDir . '/themes/quark/custom.css');
        }
    }

    #[Test]
    public function upload_rejects_page_content(): void
    {
        $controller = $this->buildController('alice', ['media' => ['write' => true]]);

        $this->expectException(ValidationException::class);

        try {
            $controller->upload($this->uploadRequest('alice', 'user://media', '', 'page.md', "---\ntitle: x\n---\n"));
        } finally {
            self::assertFileDoesNotExist($this->tempDir . '/media/page.md');
        }
    }

    #[Test]
    public function delete_rejects_another_accounts_avatar_without_users_write(): void
    {
        mkdir($this->tempDir . '/accounts/avatars', 0775, true);
        file_put_contents($this->tempDir . '/accounts/avatars/bob.png', 'png');
        $controller = $this->buildController('alice', ['media' => ['write' => true]]);

        $this->expectException(ForbiddenException::class);

        try {
            $controller->delete($this->deleteRequest('alice', 'accounts/avatars/bob.png'));
        } finally {
            self::assertFileExists($this->tempDir . '/accounts/avatars/bob.png');
        }
    }

    #[Test]
    public function delete_allows_the_callers_own_avatar(): void
    {
        mkdir($this->tempDir . '/accounts/avatars', 0775, true);
        file_put_contents($this->tempDir . '/accounts/avatars/alice.png', 'png');
        $controller = $this->buildController('alice', ['media' => ['write' => true]]);
        $avatar = ['user/accounts/avatars/alice.png' => ['name' => 'alice.png', 'path' => 'user/accounts/avatars/alice.png']];

        $response = $controller->delete($this->deleteRequest('alice', 'accounts/avatars/alice.png', $avatar));

        self::assertSame(204, $response->getStatusCode());
        self::assertFileDoesNotExist($this->tempDir . '/accounts/avatars/alice.png');
    }

    #[Test]
    public function symlinked_theme_upload_remains_allowed_for_safe_image(): void
    {
        $external = $this->tempDir . '-theme';
        mkdir($external . '/images', 0775, true);
        $this->rmrf($this->tempDir . '/themes/quark');
        symlink($external, $this->tempDir . '/themes/quark');

        $controller = $this->buildController('alice', ['media' => ['write' => true]]);
        $response = $controller->upload(
            $this->uploadRequest('alice', 'themes://quark/images', 'themes/quark', 'logo.png', 'png')
        );

        self::assertSame(201, $response->getStatusCode());
        self::assertFileExists($external . '/images/logo.png');

        $this->rmrf($external);
    }

    #[Test]
    public function upload_rejects_stylesheet_without_field_opt_in(): void
    {
        $controller = $this->buildController('alice', ['media' => ['write' => true]], $this->themeBlueprint());

        $this->expectException(ValidationException::class);

        try {
            $controller->upload($this->uploadRequest('alice', 'self@:css', 'themes/quark', 'custom.css', 'body{}'));
        } finally {
            self::assertFileDoesNotExist($this->tempDir . '/themes/quark/css/custom.css');
        }
    }

    #[Test]
    public function upload_allows_stylesheet_when_scope_blueprint_field_opts_in(): void
    {
        $controller = $this->buildController('alice', ['media' => ['write' => true]], $this->themeBlueprint());

        $response = $controller->upload(
            $this->uploadRequest('alice', 'self@:css', 'themes/quark', 'custom.css', 'body{}', ['field' => 'custom_css'])
        );

        self::assertSame(201, $response->getStatusCode());
        self::assertFileExists($this->tempDir . '/themes/quark/css/custom.css');
    }

    #[Test]
    public function upload_finds_dotted_field_nested_in_layout_containers(): void
    {
        $controller = $this->buildController('alice', ['media' => ['write' => true]], $this->themeBlueprint());

        $response = $controller->upload(
            $this->uploadRequest('alice', 'self@:content', 'themes/quark', 'intro.md', '# Hi', ['field' => 'header.intro'])
        );

        self::assertSame(201, $response->getStatusCode());
        self::assertFileExists($this->tempDir . '/themes/quark/content/intro.md');
    }

    #[Test]
    public function upload_finds_leading_dot_field_under_its_section(): void
    {
        $controller = $this->buildController('alice', ['media' => ['write' => true]], $this->themeBlueprint());

        $response = $controller->upload(
            $this->uploadRequest('alice', 'self@:css', 'themes/quark', 'theme.scss', '$a: 1;', ['field' => 'header.styles.sheet'])
        );

        self::assertSame(201, $response->getStatusCode());
        self::assertFileExists($this->tempDir . '/themes/quark/css/theme.scss');
    }

    #[Test]
    public function upload_rejects_stylesheet_for_field_without_allow_extensions(): void
    {
        $controller = $this->buildController('alice', ['media' => ['write' => true]], $this->themeBlueprint());

        $this->expectException(ValidationException::class);

        try {
            $controller->upload(
                $this->uploadRequest('alice', 'self@:css', 'themes/quark', 'custom.css', 'body{}', ['field' => 'logo'])
            );
        } finally {
            self::assertFileDoesNotExist($this->tempDir . '/themes/quark/css/custom.css');
        }
    }

    #[Test]
    public function upload_rejects_stylesheet_for_unknown_field(): void
    {
        $controller = $this->buildController('alice', ['media' => ['write' => true]], $this->themeBlueprint());

        $this->expectException(ValidationException::class);

        try {
            $controller->upload(
                $this->uploadRequest('alice', 'self@:css', 'themes/quark', 'custom.css', 'body{}', ['field' => 'no_such_field'])
            );
        } finally {
            self::assertFileDoesNotExist($this->tempDir . '/themes/quark/css/custom.css');
        }
    }

    #[Test]
    public function upload_rejects_stylesheet_when_destination_is_not_the_fields_own(): void
    {
        $controller = $this->buildController('alice', ['media' => ['write' => true]], $this->themeBlueprint());

        $this->expectException(ValidationException::class);

        try {
            $controller->upload(
                $this->uploadRequest('alice', 'self@:', 'themes/quark', 'custom.css', 'body{}', ['field' => 'custom_css'])
            );
        } finally {
            self::assertFileDoesNotExist($this->tempDir . '/themes/quark/custom.css');
        }
    }

    #[Test]
    public function allow_extensions_never_lifts_dangerous_extensions(): void
    {
        $controller = $this->buildController('alice', ['media' => ['write' => true]], $this->themeBlueprint());

        $this->expectException(ValidationException::class);

        try {
            $controller->upload(
                $this->uploadRequest('alice', 'self@:code', 'themes/quark', 'evil.php', '<?php evil();', ['field' => 'code'])
            );
        } finally {
            self::assertFileDoesNotExist($this->tempDir . '/themes/quark/code/evil.php');
        }
    }

    #[Test]
    public function allow_extensions_never_lifts_config_extensions(): void
    {
        $controller = $this->buildController('alice', ['media' => ['write' => true]], $this->themeBlueprint());

        $this->expectException(ValidationException::class);

        try {
            $controller->upload(
                $this->uploadRequest('alice', 'self@:code', 'themes/quark', 'settings.yaml', 'a: 1', ['field' => 'code'])
            );
        } finally {
            self::assertFileDoesNotExist($this->tempDir . '/themes/quark/code/settings.yaml');
        }
    }

    #[Test]
    public function allow_extensions_does_not_rescue_a_config_double_extension(): void
    {
        $controller = $this->buildController('alice', ['media' => ['write' => true]], $this->themeBlueprint());

        $this->expectException(ValidationException::class);

        try {
            $controller->upload(
                $this->uploadRequest('alice', 'self@:css', 'themes/quark', 'x.yaml.css', 'a: 1', ['field' => 'custom_css'])
            );
        } finally {
            self::assertFileDoesNotExist($this->tempDir . '/themes/quark/css/x.yaml.css');
        }
    }

    #[Test]
    public function field_opt_in_does_not_apply_without_scope(): void
    {
        $controller = $this->buildController('alice', ['media' => ['write' => true]], ['' => $this->themeFields()]);

        $this->expectException(ValidationException::class);

        try {
            $controller->upload(
                $this->uploadRequest('alice', 'user://media', '', 'custom.css', 'body{}', ['field' => 'media_css'])
            );
        } finally {
            self::assertFileDoesNotExist($this->tempDir . '/media/custom.css');
        }
    }

    #[Test]
    public function field_opt_in_does_not_apply_for_a_scope_that_owns_no_blueprint(): void
    {
        $controller = $this->buildController('alice', ['media' => ['write' => true]], $this->themeBlueprint());

        $this->expectException(ValidationException::class);

        try {
            $controller->upload(
                $this->uploadRequest('alice', 'user://media', 'plugins/api', 'custom.css', 'body{}', ['field' => 'media_css'])
            );
        } finally {
            self::assertFileDoesNotExist($this->tempDir . '/media/custom.css');
        }
    }

    #[Test]
    public function delete_allows_stylesheet_through_the_opted_in_field(): void
    {
        file_put_contents($this->tempDir . '/themes/quark/css/custom.css', 'body{}');
        $controller = $this->buildController('alice', ['media' => ['write' => true]], $this->themeBlueprint());

        $response = $controller->delete($this->deleteRequest(
            'alice',
            'user/themes/quark/css/custom.css',
            [],
            ['field' => 'custom_css', 'scope' => 'themes/quark']
        ));

        self::assertSame(204, $response->getStatusCode());
        self::assertFileDoesNotExist($this->tempDir . '/themes/quark/css/custom.css');
    }

    #[Test]
    public function delete_rejects_stylesheet_outside_the_fields_folder(): void
    {
        file_put_contents($this->tempDir . '/themes/quark/custom.css', 'body{}');
        $controller = $this->buildController('alice', ['media' => ['write' => true]], $this->themeBlueprint());

        $this->expectException(ValidationException::class);

        try {
            $controller->delete($this->deleteRequest(
                'alice',
                'themes/quark/custom.css',
                [],
                ['field' => 'custom_css', 'scope' => 'themes/quark']
            ));
        } finally {
            self::assertFileExists($this->tempDir . '/themes/quark/custom.css');
        }
    }

    #[Test]
    public function delete_rejects_stylesheet_for_field_without_opt_in(): void
    {
        file_put_contents($this->tempDir . '/themes/quark/css/custom.css', 'body{}');
        $controller = $this->buildController('alice', ['media' => ['write' => true]], $this->themeBlueprint());

        $this->expectException(ValidationException::class);

        try {
            $controller->delete($this->deleteRequest(
                'alice',
                'themes/quark/css/custom.css',
                [],
                ['field' => 'logo', 'scope' => 'themes/quark']
            ));
        } finally {
            self::assertFileExists($this->tempDir . '/themes/quark/css/custom.css');
        }
    }

    /**
     * @return array<string, array<string, mixed>>
     */
    private function themeBlueprint(): array
    {
        return ['themes/quark' => $this->themeFields()];
    }

    /**
     * A theme blueprint with file fields nested in tabs, as a real one is.
     *
     * @return array<string, mixed>
     */
    private function themeFields(): array
    {
        return [
            'tabs' => [
                'type' => 'tabs',
                'fields' => [
                    'appearance' => [
                        'type' => 'tab',
                        'fields' => [
                            'custom_css' => [
                                'type' => 'file',
                                'destination' => 'self@:css',
                                'allow_extensions' => ['css'],
                            ],
                            'logo' => [
                                'type' => 'file',
                                'destination' => 'self@:css',
                            ],
                            'header.intro' => [
                                'type' => 'file',
                                'destination' => 'self@:content',
                                'allow_extensions' => '.MD',
                            ],
                            'code' => [
                                'type' => 'file',
                                'destination' => 'self@:code',
                                'allow_extensions' => ['php', 'yaml'],
                            ],
                            'header.styles' => [
                                'type' => 'section',
                                'fields' => [
                                    '.sheet' => [
                                        'type' => 'file',
                                        'destination' => 'self@:css',
                                        'allow_extensions' => ['scss'],
                                    ],
                                ],
                            ],
                            'media_css' => [
                                'type' => 'file',
                                'destination' => 'user://media',
                                'allow_extensions' => ['css'],
                            ],
                        ],
                    ],
                ],
            ],
        ];
    }

    /**
     * @param array<string, array<string, mixed>> $blueprints Field trees keyed by scope.
     */
    private function buildController(string $username, array $apiAccess, array $blueprints = []): BlueprintUploadController
    {
        $user = TestHelper::createMockUser($username, [
            'access' => ['api' => ['access' => true] + $apiAccess],
        ]);

        TestHelper::createMockGrav([
            'config' => $this->config,
            'locator' => new BlueprintUploadTestLocator($this->tempDir),
            'uri' => new class {
                public function rootUrl(): string { return 'https://example.test'; }
            },
            'permissions' => new Permissions(),
            'accounts' => TestHelper::createMockAccounts([$username => $user]),
        ]);

        return new class (\Grav\Common\Grav::instance(), $this->config, $blueprints) extends BlueprintUploadController {
            public function __construct($grav, $config, private readonly array $blueprints)
            {
                parent::__construct($grav, $config);
            }

            protected function scopeBlueprintFields(string $scope): ?array
            {
                return $this->blueprints[$scope] ?? null;
            }
        };
    }

    private function uploadRequest(
        string $username,
        string $destination,
        string $scope,
        string $filename,
        string $contents,
        array $extra = [],
    ): ServerRequestInterface {
        $user = TestHelper::createMockUser($username, [
            'access' => ['api' => ['access' => true, 'media' => ['write' => true]]],
        ]);

        return new BlueprintUploadTestRequest(
            'POST',
            ['destination' => $destination, 'scope' => $scope] + $extra,
            ['file' => new BlueprintUploadTestFile($filename, $contents)],
            ['api_user' => $user],
        );
    }

    private function deleteRequest(string $username, string $path, array $avatar = [], array $extra = []): ServerRequestInterface
    {
        $user = TestHelper::createMockUser($username, [
            'access' => ['api' => ['access' => true, 'media' => ['write' => true]]],
            'avatar' => $avatar,
        ]);

        return new BlueprintUploadTestRequest(
            'DELETE',
            ['path' => $path] + $extra,
            [],
            ['api_user' => $user, 'json_body' => ['path' => $path] + $extra],
        );
    }

    private function rmrf(string $path): void
    {
        if (is_link($path) || is_file($path)) {
            unlink($path);
            return;
        }
        if (!is_dir($path)) {
            return;
        }
        foreach (scandir($path) ?: [] as $item) {
            if ($item === '.' || $item === '..') continue;
            $this->rmrf($path . '/' . $item);
        }
        rmdir($path);
    }
}

final class BlueprintUploadTestLocator
{
    public function __construct(private readonly string $base) {}

    public function isStream(string $path): bool
    {
        return preg_match('#^[A-Za-z][A-Za-z0-9+.-]*://#', $path) === 1;
    }

    public function findResource(string $uri, bool $absolute = false, bool $createDir = false): string|false
    {
        $map = [
            'user://' => $this->base,
            'account://' => $this->base . '/accounts',
            'plugins://' => $this->base . '/plugins',
            'themes://' => $this->base . '/themes',
            'theme://' => $this->base . '/themes/quark',
            'image://' => $this->base . '/images',
            'asset://' => $this->base . '/assets',
            'page://' => $this->base . '/pages',
        ];

        foreach ($map as $prefix => $root) {
            if (str_starts_with($uri, $prefix)) {
                $path = rtrim($root . '/' . ltrim(substr($uri, strlen($prefix)), '/'), '/');
                if ($createDir && !is_dir($path)) {
                    mkdir($path, 0775, true);
                }
                return $path;
            }
        }

        return false;
    }
}

final class BlueprintUploadTestFile implements UploadedFileInterface
{
    private readonly string $source;
    private bool $moved = false;

    public function __construct(
        private readonly string $filename,
        string $contents,
    ) {
        $this->source = tempnam(sys_get_temp_dir(), 'grav_api_upload_') ?: '';
        file_put_contents($this->source, $contents);
    }

    public function getStream(): StreamInterface { throw new \RuntimeException('Not needed in tests.'); }
    public function moveTo(string $targetPath): void
    {
        if ($this->moved) {
            throw new \RuntimeException('File already moved.');
        }
        $dir = dirname($targetPath);
        if (!is_dir($dir)) {
            mkdir($dir, 0775, true);
        }
        rename($this->source, $targetPath);
        $this->moved = true;
    }
    public function getSize(): ?int { return file_exists($this->source) ? filesize($this->source) : null; }
    public function getError(): int { return UPLOAD_ERR_OK; }
    public function getClientFilename(): ?string { return $this->filename; }
    public function getClientMediaType(): ?string { return 'application/octet-stream'; }
}

final class BlueprintUploadTestRequest implements ServerRequestInterface
{
    public function __construct(
        private readonly string $method,
        private readonly array $parsedBody,
        private readonly array $uploadedFiles,
        private array $attributes,
    ) {}

    public function getParsedBody(): mixed { return $this->parsedBody; }
    public function getUploadedFiles(): array { return $this->uploadedFiles; }
    public function getAttribute(string $name, mixed $default = null): mixed { return $this->attributes[$name] ?? $default; }
    public function withAttribute(string $name, mixed $value): static { $clone = clone $this; $clone->attributes[$name] = $value; return $clone; }
    public function withoutAttribute(string $name): static { $clone = clone $this; unset($clone->attributes[$name]); return $clone; }
    public function getAttributes(): array { return $this->attributes; }
    public function getMethod(): string { return $this->method; }
    public function withMethod(string $method): static { return clone $this; }
    public function getQueryParams(): array { return []; }
    public function getBody(): StreamInterface { return new BlueprintUploadTestStream(json_encode($this->parsedBody)); }
    public function getHeaderLine(string $name): string { return ''; }
    public function getHeader(string $name): array { return []; }
    public function getHeaders(): array { return []; }
    public function hasHeader(string $name): bool { return false; }
    public function getRequestTarget(): string { return '/api/v1/blueprint-upload'; }
    public function withRequestTarget(string $requestTarget): static { return clone $this; }
    public function getUri(): UriInterface { return new BlueprintUploadTestUri(); }
    public function withUri(UriInterface $uri, bool $preserveHost = false): static { return clone $this; }
    public function getProtocolVersion(): string { return '1.1'; }
    public function withProtocolVersion(string $version): static { return clone $this; }
    public function withHeader(string $name, $value): static { return clone $this; }
    public function withAddedHeader(string $name, $value): static { return clone $this; }
    public function withoutHeader(string $name): static { return clone $this; }
    public function withBody(StreamInterface $body): static { return clone $this; }
    public function getServerParams(): array { return []; }
    public function getCookieParams(): array { return []; }
    public function withCookieParams(array $cookies): static { return clone $this; }
    public function withQueryParams(array $query): static { return clone $this; }
    public function withUploadedFiles(array $uploadedFiles): static { return clone $this; }
    public function withParsedBody($data): static { return clone $this; }
}

final class BlueprintUploadTestStream implements StreamInterface
{
    public function __construct(private readonly string $contents) {}
    public function __toString(): string { return $this->contents; }
    public function close(): void {}
    public function detach() { return null; }
    public function getSize(): ?int { return strlen($this->contents); }
    public function tell(): int { return 0; }
    public function eof(): bool { return true; }
    public function isSeekable(): bool { return false; }
    public function seek(int $offset, int $whence = SEEK_SET): void {}
    public function rewind(): void {}
    public function isWritable(): bool { return false; }
    public function write(string $string): int { return 0; }
    public function isReadable(): bool { return true; }
    public function read(int $length): string { return $this->contents; }
    public function getContents(): string { return $this->contents; }
    public function getMetadata(?string $key = null): mixed { return null; }
}

final class BlueprintUploadTestUri implements UriInterface
{
    public function getScheme(): string { return 'https'; }
    public function getAuthority(): string { return 'example.test'; }
    public function getUserInfo(): string { return ''; }
    public function getHost(): string { return 'example.test'; }
    public function getPort(): ?int { return null; }
    public function getPath(): string { return '/api/v1/blueprint-upload'; }
    public function getQuery(): string { return ''; }
    public function getFragment(): string { return ''; }
    public function withScheme(string $scheme): static { return clone $this; }
    public function withUserInfo(string $user, ?string $password = null): static { return clone $this; }
    public function withHost(string $host): static { return clone $this; }
    public function withPort(?int $port): static { return clone $this; }
    public function withPath(string $path): static { return clone $this; }
    public function withQuery(string $query): static { return clone $this; }
    public function withFragment(string $fragment): static { return clone $this; }
    public function __toString(): string { return 'https://example.test/api/v1/blueprint-upload'; }
}
