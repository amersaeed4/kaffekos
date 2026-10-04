<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/Users/amer/Sites/kaffekos1/user/pages/06.contact/contact.md',
    'modified' => 1791100445,
    'size' => 1812,
    'data' => [
        'header' => [
            'title' => 'Contact',
            'banner' => [
                'eyebrow' => 'Kontakt',
                'subtitle' => 'Questions, bookings or just saying hello? We would love to hear from you.'
            ],
            'contact' => [
                'form_title' => 'Send us a message',
                'form_intro' => 'We usually reply within a day.',
                'info_title' => 'Find us',
                'show_map' => true
            ],
            'form' => [
                'name' => 'contact',
                'fields' => [
                    'name' => [
                        'label' => 'Your name',
                        'type' => 'text',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    'email' => [
                        'label' => 'Email',
                        'type' => 'email',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    'phone' => [
                        'label' => 'Phone (optional)',
                        'type' => 'text'
                    ],
                    'subject' => [
                        'label' => 'What is it about?',
                        'type' => 'select',
                        'default' => 'General',
                        'options' => [
                            'General' => 'General question',
                            'Reservation' => 'Table reservation',
                            'Events' => 'Events or catering',
                            'Feedback' => 'Feedback'
                        ]
                    ],
                    'message' => [
                        'label' => 'Message',
                        'type' => 'textarea',
                        'rows' => 6,
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    'honeypot' => [
                        'type' => 'honeypot'
                    ]
                ],
                'buttons' => [
                    'submit' => [
                        'type' => 'submit',
                        'value' => 'Send message'
                    ]
                ],
                'process' => [
                    0 => [
                        'save' => [
                            'fileprefix' => 'message-',
                            'dateformat' => 'Ymd-His',
                            'extension' => 'txt',
                            'body' => '{% include \'forms/data.txt.twig\' %}'
                        ]
                    ],
                    1 => [
                        'email' => [
                            'subject' => '[Kaffekos website] {{ form.value.subject|e }} from {{ form.value.name|e }}',
                            'body' => '{% include \'forms/data.html.twig\' %}',
                            'reply_to' => '{{ form.value.email }}'
                        ]
                    ],
                    2 => [
                        'message' => 'Tusen takk! Thank you, your message has been sent. We will get back to you soon.'
                    ],
                    3 => [
                        'reset' => true
                    ]
                ]
            ]
        ],
        'frontmatter' => 'title: Contact
banner:
    eyebrow: \'Kontakt\'
    subtitle: \'Questions, bookings or just saying hello? We would love to hear from you.\'
contact:
    form_title: \'Send us a message\'
    form_intro: \'We usually reply within a day.\'
    info_title: \'Find us\'
    show_map: true
form:
    name: contact
    fields:
        name:
            label: \'Your name\'
            type: text
            validate:
                required: true
        email:
            label: Email
            type: email
            validate:
                required: true
        phone:
            label: \'Phone (optional)\'
            type: text
        subject:
            label: \'What is it about?\'
            type: select
            default: General
            options:
                General: \'General question\'
                Reservation: \'Table reservation\'
                Events: \'Events or catering\'
                Feedback: \'Feedback\'
        message:
            label: Message
            type: textarea
            rows: 6
            validate:
                required: true
        honeypot:
            type: honeypot
    buttons:
        submit:
            type: submit
            value: \'Send message\'
    process:
        -
            save:
                fileprefix: message-
                dateformat: Ymd-His
                extension: txt
                body: "{% include \'forms/data.txt.twig\' %}"
        -
            email:
                subject: \'[Kaffekos website] {{ form.value.subject|e }} from {{ form.value.name|e }}\'
                body: "{% include \'forms/data.html.twig\' %}"
                reply_to: \'{{ form.value.email }}\'
        -
            message: \'Tusen takk! Thank you, your message has been sent. We will get back to you soon.\'
        -
            reset: true',
        'markdown' => ''
    ]
];
