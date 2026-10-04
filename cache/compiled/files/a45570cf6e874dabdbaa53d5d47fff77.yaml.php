<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/amer/Sites/kaffekos1/user/themes/kaffekos/blueprints.yaml',
    'modified' => 1791129081,
    'size' => 9428,
    'data' => [
        'name' => 'Kaffekos',
        'slug' => 'kaffekos',
        'type' => 'theme',
        'version' => '1.0.0',
        'description' => 'Norwegian-inspired theme for the Kaffekos coffee house in Lahore. Every text, image, colour, opening hour and menu item is editable from the admin panel.',
        'icon' => 'coffee',
        'author' => [
            'name' => 'Kaffekos',
            'email' => 'info@kaffekos.pk',
            'url' => 'https://kaffekos.pk'
        ],
        'license' => 'MIT',
        'compatibility' => [
            'grav' => [
                0 => '2.1'
            ]
        ],
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=2.1.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'brand' => [
                            'type' => 'tab',
                            'title' => 'Brand & Logo',
                            'fields' => [
                                'brand_intro' => [
                                    'type' => 'spacer',
                                    'title' => 'Logo, tagline and top-of-page elements'
                                ],
                                'custom_logo' => [
                                    'type' => 'file',
                                    'label' => 'Logo',
                                    'help' => 'Square or wide PNG / SVG with a transparent background. Replaces the default round Kaffekos mark.',
                                    'destination' => 'theme://images/logo',
                                    'multiple' => false,
                                    'accept' => [
                                        0 => 'image/*'
                                    ]
                                ],
                                'custom_favicon' => [
                                    'type' => 'file',
                                    'label' => 'Browser icon (favicon)',
                                    'help' => 'Small square PNG, SVG or ICO (100 KB at most). Shown in the browser tab.',
                                    'filesize' => 0.1,
                                    'destination' => 'theme://images/favicon',
                                    'multiple' => false,
                                    'accept' => [
                                        0 => 'image/png',
                                        1 => 'image/svg+xml',
                                        2 => '.ico'
                                    ]
                                ],
                                'brand.wordmark' => [
                                    'type' => 'text',
                                    'label' => 'Name shown next to the logo',
                                    'default' => 'Kaffekos'
                                ],
                                'brand.tagline' => [
                                    'type' => 'text',
                                    'label' => 'Small line under the name',
                                    'default' => 'Coffee, Comfort, Connection'
                                ],
                                'header.cta_label' => [
                                    'type' => 'text',
                                    'label' => 'Header button text',
                                    'help' => 'The highlighted button on the right of the menu. Leave empty to hide it.',
                                    'default' => 'Visit Us'
                                ],
                                'header.cta_url' => [
                                    'type' => 'text',
                                    'label' => 'Header button link',
                                    'help' => 'A page such as /contact, or a full web address.',
                                    'default' => '/contact'
                                ],
                                'announcement_title' => [
                                    'type' => 'spacer',
                                    'title' => 'Announcement bar (top of every page)'
                                ],
                                'announcement.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Show announcement bar',
                                    'highlight' => 0,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'Yes',
                                        0 => 'No'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'announcement.text' => [
                                    'type' => 'text',
                                    'label' => 'Announcement text',
                                    'placeholder' => 'Fresh kanelboller every morning from 8 AM'
                                ],
                                'announcement.link' => [
                                    'type' => 'text',
                                    'label' => 'Announcement link (optional)',
                                    'placeholder' => '/menu'
                                ]
                            ]
                        ],
                        'colors' => [
                            'type' => 'tab',
                            'title' => 'Colours',
                            'fields' => [
                                'colors_intro' => [
                                    'type' => 'spacer',
                                    'title' => 'Brand colours',
                                    'text' => 'These colours are used across the whole site. The defaults come from the Kaffekos brand (Norwegian navy and red, coffee browns, warm cream).'
                                ],
                                'colors.navy' => [
                                    'type' => 'colorpicker',
                                    'label' => 'Deep navy (headings, dark sections)',
                                    'default' => '#0f2747'
                                ],
                                'colors.red' => [
                                    'type' => 'colorpicker',
                                    'label' => 'Norwegian red (buttons, small accents)',
                                    'default' => '#ba0c2f'
                                ],
                                'colors.gold' => [
                                    'type' => 'colorpicker',
                                    'label' => 'Gold (dividers, highlights)',
                                    'default' => '#c99a5b'
                                ],
                                'colors.cream' => [
                                    'type' => 'colorpicker',
                                    'label' => 'Cream (page background)',
                                    'default' => '#fbf6ec'
                                ],
                                'colors.sand' => [
                                    'type' => 'colorpicker',
                                    'label' => 'Sand (alternate section background)',
                                    'default' => '#f1e6d2'
                                ],
                                'colors.ink' => [
                                    'type' => 'colorpicker',
                                    'label' => 'Coffee brown (body text)',
                                    'default' => '#2b1a10'
                                ]
                            ]
                        ],
                        'contact' => [
                            'type' => 'tab',
                            'title' => 'Contact & Location',
                            'fields' => [
                                'contact_intro' => [
                                    'type' => 'spacer',
                                    'title' => 'Shown in the footer, the Contact page, Google search results and map buttons'
                                ],
                                'business.phone' => [
                                    'type' => 'text',
                                    'label' => 'Phone number',
                                    'default' => '+92 300 8480123'
                                ],
                                'business.whatsapp' => [
                                    'type' => 'text',
                                    'label' => 'WhatsApp number',
                                    'help' => 'International format, digits only, no + or spaces. Example 923008480123',
                                    'default' => '923008480123'
                                ],
                                'business.email' => [
                                    'type' => 'email',
                                    'label' => 'Email address',
                                    'default' => 'info@kaffekos.pk'
                                ],
                                'business.address' => [
                                    'type' => 'textarea',
                                    'label' => 'Street address',
                                    'rows' => 3,
                                    'help' => 'Type it exactly as you want it displayed (new lines are kept).',
                                    'default' => 'Kaffekos, Grand Park
Block A, Phase 1, Johar Town
Lahore, Pakistan'
                                ],
                                'business.maps_url' => [
                                    'type' => 'text',
                                    'label' => 'Google Maps link',
                                    'help' => 'The \'Get directions\' buttons open this link.',
                                    'default' => 'https://maps.app.goo.gl/PeZXekvmyz7heDNm9'
                                ],
                                'business.lat' => [
                                    'type' => 'text',
                                    'label' => 'Map latitude',
                                    'help' => 'Used for the embedded map. Right-click your location in Google Maps and click the numbers to copy them.',
                                    'default' => '31.4708125'
                                ],
                                'business.lng' => [
                                    'type' => 'text',
                                    'label' => 'Map longitude',
                                    'default' => '74.3024827'
                                ],
                                'business.price_range' => [
                                    'type' => 'text',
                                    'label' => 'Price range (for Google)',
                                    'default' => 'Rs. 300 - 1500'
                                ]
                            ]
                        ],
                        'hours' => [
                            'type' => 'tab',
                            'title' => 'Opening Hours',
                            'fields' => [
                                'hours_intro' => [
                                    'type' => 'spacer',
                                    'title' => 'Opening hours',
                                    'text' => 'Use 24-hour times like 08:00 and 23:00. A time after midnight (for example 01:00) is fine. The site shows "Open now / Closed" automatically in Lahore time.'
                                ],
                                'hours' => [
                                    'type' => 'list',
                                    'label' => 'Days',
                                    'style' => 'vertical',
                                    'collapsed' => true,
                                    'fields' => [
                                        '.day' => [
                                            'type' => 'text',
                                            'label' => 'Day'
                                        ],
                                        '.open' => [
                                            'type' => 'text',
                                            'label' => 'Opens (24h)',
                                            'placeholder' => '08:00'
                                        ],
                                        '.close' => [
                                            'type' => 'text',
                                            'label' => 'Closes (24h)',
                                            'placeholder' => '23:00'
                                        ],
                                        '.closed' => [
                                            'type' => 'toggle',
                                            'label' => 'Closed all day',
                                            'highlight' => 0,
                                            'default' => 0,
                                            'options' => [
                                                1 => 'Yes',
                                                0 => 'No'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ]
                                    ]
                                ],
                                'hours_note' => [
                                    'type' => 'text',
                                    'label' => 'Note under the hours',
                                    'placeholder' => 'Open during Ramadan: 4 PM - 1 AM'
                                ]
                            ]
                        ],
                        'social' => [
                            'type' => 'tab',
                            'title' => 'Social Media',
                            'fields' => [
                                'social_intro' => [
                                    'type' => 'spacer',
                                    'title' => 'Instagram, Facebook, TikTok, YouTube and LinkedIn icons always show in the footer. Until a link is added the icon is greyed out and not clickable. X only shows once a link is added.'
                                ],
                                'social.instagram' => [
                                    'type' => 'text',
                                    'label' => 'Instagram link',
                                    'default' => 'https://www.instagram.com/kaffekospakistan/'
                                ],
                                'social.facebook' => [
                                    'type' => 'text',
                                    'label' => 'Facebook link',
                                    'default' => 'https://www.facebook.com/kaffekos'
                                ],
                                'social.tiktok' => [
                                    'type' => 'text',
                                    'label' => 'TikTok link'
                                ],
                                'social.youtube' => [
                                    'type' => 'text',
                                    'label' => 'YouTube link'
                                ],
                                'social.linkedin' => [
                                    'type' => 'text',
                                    'label' => 'LinkedIn link'
                                ],
                                'social.x' => [
                                    'type' => 'text',
                                    'label' => 'X (Twitter) link'
                                ]
                            ]
                        ],
                        'footer' => [
                            'type' => 'tab',
                            'title' => 'Footer & Shop',
                            'fields' => [
                                'footer.about' => [
                                    'type' => 'textarea',
                                    'label' => 'Short text in the footer',
                                    'rows' => 3,
                                    'default' => 'A small piece of Norway in Lahore. Honest coffee, warm bakes and the kind of cosy corner that makes you stay a little longer.'
                                ],
                                'footer.copyright' => [
                                    'type' => 'text',
                                    'label' => 'Copyright line',
                                    'default' => 'Kaffekos. All rights reserved.'
                                ],
                                'footer.tagline' => [
                                    'type' => 'text',
                                    'label' => 'Small closing line',
                                    'default' => 'Laget med kos i Lahore'
                                ],
                                'shop_title' => [
                                    'type' => 'spacer',
                                    'title' => 'Menu settings'
                                ],
                                'menu.currency' => [
                                    'type' => 'text',
                                    'label' => 'Currency shown before menu prices',
                                    'default' => 'Rs.'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
