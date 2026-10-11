---
title: Kontakt
banner:
    eyebrow: 'Si hei'
    subtitle: 'Spørsmål, bordbestilling eller bare en hilsen? Vi vil gjerne høre fra deg.'
contact:
    form_title: 'Send oss en melding'
    form_intro: 'Vi svarer vanligvis i løpet av en dag.'
    info_title: 'Finn oss'
    show_map: true
form:
    name: contact
    fields:
        name:
            label: 'Navnet ditt'
            type: text
            validate:
                required: true
        email:
            label: E-post
            type: email
            validate:
                required: true
        phone:
            label: 'Telefon (valgfritt)'
            type: text
        subject:
            label: 'Hva gjelder det?'
            type: select
            default: General
            options:
                General: 'Generelt spørsmål'
                Reservation: 'Bordbestilling'
                Events: 'Arrangementer eller catering'
                Feedback: 'Tilbakemelding'
        message:
            label: Melding
            type: textarea
            rows: 6
            validate:
                required: true
        honeypot:
            type: honeypot
    buttons:
        submit:
            type: submit
            value: 'Send melding'
    process:
        -
            save:
                fileprefix: message-
                dateformat: Ymd-His
                extension: txt
                body: "{% include 'forms/data.txt.twig' %}"
        -
            email:
                subject: '[Kaffekos website] {{ form.value.subject|e }} from {{ form.value.name|e }} (Norwegian page)'
                body: "{% include 'forms/data.html.twig' %}"
                reply_to: '{{ form.value.email }}'
        -
            message: 'Tusen takk! Meldingen din er sendt. Vi tar kontakt med deg snart.'
        -
            reset: true
seo:
    title: 'Kontakt og beliggenhet | Kaffekos kaffebar, Johar Town Lahore'
    description: 'Finn Kaffekos i Grand Park, Block A, Phase 1, Johar Town, Lahore. Åpningstider, veibeskrivelse, telefon, WhatsApp og et skjema for å sende oss en melding.'
    keywords: 'Kaffekos beliggenhet, Kaffekos adresse, kaffebar Johar Town, kafé i nærheten, Grand Park Johar Town, åpningstider kafé Lahore, bestille bord kafé Lahore, norsk kaffebar Lahore'
---
