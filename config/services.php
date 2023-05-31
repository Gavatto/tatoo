<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Послуги третіх осіб
    |------------------------------------------------ ------------------------
    |
    | Цей файл призначений для зберігання облікових даних сторонніх служб, наприклад
    | як Mailgun, Postmark, AWS тощо. Цей файл забезпечує де-факто
    | розташування для цього типу інформації, що дозволяє пакетам мати
    | звичайний файл для пошуку різних облікових даних служби.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

];
