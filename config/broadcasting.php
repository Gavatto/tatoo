<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Мовник за замовчуванням
    |------------------------------------------------ ------------------------
    |
    | Цей параметр керує мовником за замовчуванням, який використовуватиметься
    | рамки, коли подію потрібно транслювати. Ви можете встановити це значення
    | будь-які з’єднання, визначені в масиві «з’єднання» нижче.
    |
    | Supported: "pusher", "ably", "redis", "log", "null"
    |
    */

    'default' => env('BROADCAST_DRIVER', 'null'),

    /*
    |--------------------------------------------------------------------------
    | Широкомовні підключення
    |------------------------------------------------ ------------------------
    |
    | Тут ви можете визначити всі широкомовні підключення, які будуть використовуватися
    | транслювати події в інші системи або через веб-сокети. Зразки
    | кожен доступний тип підключення надається всередині цього масиву.
    |
    */

    'connections' => [

        'pusher' => [
            'driver' => 'pusher',
            'key' => env('PUSHER_APP_KEY'),
            'secret' => env('PUSHER_APP_SECRET'),
            'app_id' => env('PUSHER_APP_ID'),
            'options' => [
                'cluster' => env('PUSHER_APP_CLUSTER'),
                'host' => env('PUSHER_HOST') ?: 'api-'.env('PUSHER_APP_CLUSTER', 'mt1').'.pusher.com',
                'port' => env('PUSHER_PORT', 443),
                'scheme' => env('PUSHER_SCHEME', 'https'),
                'encrypted' => true,
                'useTLS' => env('PUSHER_SCHEME', 'https') === 'https',
            ],
            'client_options' => [
                // Guzzle client options: https://docs.guzzlephp.org/en/stable/request-options.html
            ],
        ],

        'ably' => [
            'driver' => 'ably',
            'key' => env('ABLY_KEY'),
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
        ],

        'log' => [
            'driver' => 'log',
        ],

        'null' => [
            'driver' => 'null',
        ],

    ],

];
