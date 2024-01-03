<?php

declare(strict_types=1);

return [
    'default' => env('DB_CONNECTION', 'local'),
    'connections' => [
        'redis' => [
            'client' => env('REDIS_CLIENT', 'predis'),

            'default' => [
                'host' => env('REDIS_HOST', 'redis'),
                'password' => env('REDIS_PASSWORD', null),
                'port' => env('REDIS_PORT', 6379),
                'database' => env('REDIS_DB', 0),
                'read_write_timeout' => 60,
            ],
        ],
    ],
];
