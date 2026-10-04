<?php
namespace Grav\Theme;

use Grav\Common\Theme;

class Kaffekos extends Theme
{
    public static function getSubscribedEvents()
    {
        return [
            'onTwigInitialized' => ['onTwigInitialized', 0],
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
    public function galleryPhotos($galleryPage, $limit = 0): array
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
        return $limit > 0 ? array_slice($out, 0, (int)$limit) : $out;
    }
}
