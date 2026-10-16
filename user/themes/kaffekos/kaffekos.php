<?php
namespace Grav\Theme;

use Grav\Common\Theme;

class Kaffekos extends Theme
{
    public static function getSubscribedEvents()
    {
        return [
            'onTwigInitialized' => ['onTwigInitialized', 0],
            'onPageInitialized' => ['onPageInitialized', 0],
        ];
    }

    public function onTwigInitialized()
    {
        $twig = $this->grav['twig'];

        // Class names the Form plugin puts on the contact form, picked up by css/kaffekos.css
        $twig->twig_vars = array_merge($twig->twig_vars, [
            'form_button_outer_classes'       => 'form-actions',
            'form_button_classes'             => 'btn btn-primary',
            'form_errors_classes'             => 'form-errors',
            'form_field_outer_classes'        => 'form-group',
            'form_field_outer_label_classes'  => 'form-label-wrapper',
            'form_field_label_classes'        => 'form-label',
            'form_field_input_classes'        => 'form-input',
            'form_field_textarea_classes'     => 'form-input',
            'form_field_select_classes'       => 'form-input',
        ]);

        $twig->twig->addFunction(new \Twig\TwigFunction('kk_featured_items', [$this, 'featuredItems']));
        $twig->twig->addFunction(new \Twig\TwigFunction('kk_gallery_photos', [$this, 'galleryPhotos']));
        $twig->twig->addFunction(new \Twig\TwigFunction('kk_google_rating', [$this, 'googleRating']));
        $twig->twig->addFunction(new \Twig\TwigFunction('kk_google_review_url', [$this, 'googleReviewUrl']));
        $twig->twig->addFunction(new \Twig\TwigFunction('kk_event_posts', [$this, 'eventPosts']));
        $twig->twig->addFunction(new \Twig\TwigFunction('kk_is_expired', [self::class, 'isExpiredAnnouncement']));
        $twig->twig->addFunction(new \Twig\TwigFunction('kk_lang', [$this, 'activeLang']));
        $twig->twig->addFunction(new \Twig\TwigFunction('kk_lang_urls', [$this, 'languageUrls']));
        $twig->twig->addFunction(new \Twig\TwigFunction('kk_lang_prefix', [$this, 'langPrefix']));
        $twig->twig->addFunction(new \Twig\TwigFunction('kk_date', [$this, 'localDate']));
        $twig->twig->addFunction(new \Twig\TwigFunction('kk_l', [$this, 'localized']));
    }

    /** Language of the current request, e.g. "en" or "no". */
    public function activeLang(): string
    {
        $language = $this->grav['language'];
        return $language->getActive() ?: (string)$language->getDefault();
    }

    /** "" for the default language, "/no" for the others: put it in front of an internal route. */
    public function langPrefix(): string
    {
        $lang = $this->activeLang();
        return $lang === (string)$this->grav['language']->getDefault() ? '' : '/' . $lang;
    }

    /**
     * Addresses of the current page in every supported language, for the language switcher and hreflang links.
     *
     * @return array<string, string> language code => path (with the site's base folder), or full address when $absolute
     */
    public function languageUrls(bool $absolute = false): array
    {
        $language = $this->grav['language'];
        $default  = (string)$language->getDefault();
        $root     = rtrim($this->grav['uri']->rootUrl($absolute), '/');
        $path     = '/' . trim((string)$this->grav['uri']->path(), '/');
        $path     = $path === '/' ? '' : $path;
        $out      = [];
        foreach ($language->getLanguages() as $code) {
            $isDefault  = $code === $default;
            $out[$code] = $root . ($isDefault ? '' : '/' . $code) . $path;
            if ($isDefault && $path === '') {
                $out[$code] .= '/'; // the default-language home page ends in a slash, like its canonical address
            }
        }
        return $out;
    }

    /** Like Twig's date(), but month and day names come out in the active language (theme language file). */
    public function localDate($timestamp, string $format): string
    {
        $timestamp = is_numeric($timestamp) ? (int)$timestamp : (int)strtotime((string)$timestamp);
        if ($this->activeLang() === (string)$this->grav['language']->getDefault()) {
            return date($format, $timestamp);
        }
        $lang  = $this->grav['language'];
        $names = function (string $key) use ($lang): array {
            return array_map('trim', explode(',', (string)$lang->translate($key)));
        };
        $months = $names('KK.DATE.MONTHS');
        $mshort = $names('KK.DATE.MONTHS_SHORT');
        $days   = $names('KK.DATE.DAYS');
        $dshort = $names('KK.DATE.DAYS_SHORT');

        $out = '';
        for ($i = 0, $n = strlen($format); $i < $n; $i++) {
            $c = $format[$i];
            if ($c === '\\' && $i + 1 < $n) {
                $out .= $format[++$i];
            } elseif ($c === 'F' && count($months) === 12) {
                $out .= $months[(int)date('n', $timestamp) - 1];
            } elseif ($c === 'M' && count($mshort) === 12) {
                $out .= $mshort[(int)date('n', $timestamp) - 1];
            } elseif ($c === 'l' && count($days) === 7) {
                $out .= $days[(int)date('N', $timestamp) - 1];
            } elseif ($c === 'D' && count($dshort) === 7) {
                $out .= $dshort[(int)date('N', $timestamp) - 1];
            } else {
                $out .= date($c, $timestamp);
            }
        }
        return $out;
    }

    /**
     * A theme setting in the visitor's language. Each translatable setting has an optional twin with a
     * language suffix (footer.about, footer.about_no). The twin wins when it is filled in, otherwise the main one is used.
     */
    public function localized(string $path)
    {
        $config = $this->grav['config'];
        $lang   = $this->activeLang();
        if ($lang !== (string)$this->grav['language']->getDefault()) {
            $twin = $config->get('themes.kaffekos.' . $path . '_' . $lang);
            if (is_string($twin) && trim($twin) !== '') {
                return $twin;
            }
        }
        return $config->get('themes.kaffekos.' . $path);
    }

    /**
     * An "Upcoming event" post is only an announcement: once the event is over it disappears from the site
     * by itself. "Over" means the optional Ends time (Lahore time) has passed, or, without one, the day of the
     * event has ended (midnight, site timezone). Recaps (type Event / Activity / News) always stay.
     */
    public static function isExpiredAnnouncement($post): bool
    {
        $header = $post->header();
        if (($header->kind ?? '') !== 'upcoming') {
            return false;
        }
        $end = trim((string)($header->event_end ?? ''));
        if ($end !== '') {
            try {
                return (new \DateTime($end, new \DateTimeZone('Asia/Karachi')))->getTimestamp() <= time();
            } catch (\Exception $e) {
                // unreadable date: fall back to the event day below
            }
        }
        return (int)$post->date() < strtotime('today');
    }

    /**
     * Published posts under the Events page, minus announcements whose day has passed.
     *
     * @return array<int, object>
     */
    public function eventPosts($eventsPage): array
    {
        $out = [];
        if (!$eventsPage) {
            return $out;
        }
        foreach ($eventsPage->children()->published() as $post) {
            if (!self::isExpiredAnnouncement($post)) {
                $out[] = $post;
            }
        }
        return $out;
    }

    /** Someone opens the direct link of a finished announcement: send them to the Events list. */
    public function onPageInitialized()
    {
        $page = $this->grav['page'] ?? null;
        if ($page && $page->template() === 'blog-item' && self::isExpiredAnnouncement($page)) {
            $parent = $page->parent();
            $this->grav->redirectLangSafe($parent ? $parent->route() : '/');
        }
    }

    /**
     * Menu items flagged "Show on Home page" across all published categories under the Menu page.
     *
     * @return array<int, array{item: array, cat: object, image: mixed}>
     */
    public function featuredItems($menuPage, $limit = 6): array
    {
        $out = [];
        if (!$menuPage) {
            return $out;
        }
        foreach ($menuPage->children()->published() as $cat) {
            $header = $cat->header();
            $media  = $cat->media();
            foreach ((array)($header->items ?? []) as $item) {
                if (empty($item['featured']) || !empty($item['soldout']) || empty($item['name'])) {
                    continue;
                }
                $image = !empty($item['image']) && isset($media[$item['image']]) ? $media[$item['image']] : null;
                $out[] = ['item' => $item, 'cat' => $cat, 'image' => $image];
            }
        }
        return $limit > 0 ? array_slice($out, 0, (int)$limit) : $out;
    }

    /**
     * Photos for the gallery: the captioned list if the editor made one, otherwise every uploaded image.
     *
     * @return array<int, array{media: mixed, caption: string}>
     */
    public function galleryPhotos($galleryPage, $limit = 0, $random = false): array
    {
        $out = [];
        if (!$galleryPage) {
            return $out;
        }
        $media  = $galleryPage->media();
        $listed = (array)($galleryPage->header()->photos ?? []);

        if ($listed) {
            foreach ($listed as $photo) {
                $name = $photo['image'] ?? null;
                if ($name && isset($media[$name])) {
                    $out[] = ['media' => $media[$name], 'caption' => (string)($photo['caption'] ?? '')];
                }
            }
        } else {
            // all() rather than images(): Grav files SVGs under "vector", not "image"
            foreach ($media->all() as $file) {
                if (strpos((string)$file->get('mime'), 'image/') === 0) {
                    $out[] = ['media' => $file, 'caption' => ''];
                }
            }
        }
        if ($random) {
            shuffle($out);
        }
        return $limit > 0 ? array_slice($out, 0, (int)$limit) : $out;
    }

    /**
     * Live Google rating + review count for the café (Places API "Place Details").
     * Needs user/config/google-places.yaml (git-ignored): api_key + place_id. Without it, or if Google can't be reached,
     * returns the last good value, or null so templates fall back to the text typed in the admin.
     * Refresh interval and the daily call limit are theme settings (defaults: every 6 hours, max 6 calls a day); a failed call is retried after 15 minutes. That keeps it far inside Google's free quota.
     *
     * @return array{rating: float, count: int}|null
     */
    public function googleRating(): ?array
    {
        $cfg   = $this->grav['config'];
        $key   = trim((string)$cfg->get('google-places.api_key'));
        $place = trim((string)$cfg->get('google-places.place_id'));
        if ($key === '' || $place === '') {
            return null;
        }

        // Both limits come from Admin -> Themes -> Kaffekos -> Google Rating
        $refreshHours = max(1, min(168, (int)$cfg->get('themes.kaffekos.google.refresh_hours', 6)));
        $maxCalls     = max(1, min(100, (int)$cfg->get('themes.kaffekos.google.max_calls_per_day', 6)));

        $cache = $this->grav['cache'];
        $id    = 'kk-google-rating-' . md5($place . $key);
        $data  = $cache->fetch($id);
        $data  = is_array($data) ? $data : [];

        if (empty($data['next']) || $data['next'] <= time()) {
            // Hard self-imposed limit: never more than $maxCalls calls to Google per Lahore day
            // (set in the theme settings), whatever else happens.
            $today = gmdate('Y-m-d', time() + 5 * 3600);
            if (($data['day'] ?? '') !== $today) {
                $data['day']   = $today;
                $data['calls'] = 0;
            }
            if ($data['calls'] < $maxCalls) {
                $data['calls']++;
                $fresh = $this->fetchGooglePlace($key, $place, (string)$cfg->get('google-places.endpoint'));
                if ($fresh) {
                    $data = $fresh + ['next' => time() + $refreshHours * 3600, 'day' => $data['day'], 'calls' => $data['calls']];
                } else {
                    $data['next'] = time() + 15 * 60;
                }
                $cache->save($id, $data, 30 * 86400);
            }
        }

        return isset($data['rating'], $data['count']) ? ['rating' => (float)$data['rating'], 'count' => (int)$data['count']] : null;
    }

    /**
     * Link that opens Google's "write a review" form for the café (used for the QR code and button on the Home page).
     * Uses the link typed in Themes -> Kaffekos -> Google Rating if there is one, otherwise builds Google's official
     * link from the Place ID in user/config/google-places.yaml. Returns null when neither exists.
     */
    public function googleReviewUrl(): ?string
    {
        $cfg    = $this->grav['config'];
        $manual = trim((string)$cfg->get('themes.kaffekos.google.review_url'));
        if ($manual !== '' && preg_match('#^https://#i', $manual)) {
            return $manual;
        }
        $place = trim((string)$cfg->get('google-places.place_id'));
        return $place !== '' ? 'https://search.google.com/local/writereview?placeid=' . rawurlencode($place) : null;
    }

    private function fetchGooglePlace(string $key, string $place, string $endpoint = ''): ?array
    {
        $base = rtrim($endpoint !== '' ? $endpoint : 'https://places.googleapis.com/v1/places', '/');
        $ch   = curl_init($base . '/' . rawurlencode($place));
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CONNECTTIMEOUT => 2,
            CURLOPT_TIMEOUT        => 4,
            CURLOPT_HTTPHEADER     => ['X-Goog-Api-Key: ' . $key, 'X-Goog-FieldMask: rating,userRatingCount'],
        ]);
        $body = curl_exec($ch);
        $code = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $err  = curl_error($ch);
        curl_close($ch);

        $json   = is_string($body) ? json_decode($body, true) : null;
        $rating = is_array($json) ? ($json['rating'] ?? null) : null;
        $count  = is_array($json) ? ($json['userRatingCount'] ?? null) : null;
        if ($code === 200 && is_numeric($rating) && is_numeric($count) && $rating >= 1 && $rating <= 5 && $count > 0) {
            return ['rating' => round((float)$rating, 1), 'count' => (int)$count];
        }

        $why = $err ?: (is_array($json) ? ($json['error']['message'] ?? 'unexpected response') : 'no response');
        $this->grav['log']->warning('Kaffekos Google rating: HTTP ' . $code . ' ' . $why);
        return null;
    }
}
