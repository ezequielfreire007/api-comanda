<?php

return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header
        'determineRouteBeforeAppMiddleware' => true,
        
        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'UTN FRA LOGGER',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
         // Monolog settings
        'IPlogger' => [
            'name' => 'UTN FRA LOGGER',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/ip.log',
            'level' => \Monolog\Logger::DEBUG,
        ],

        // 'db' => [
        //     'driver' => 'mysql',
        //      'host' => 'localhost',
        //      'database' => 'comanda',
        //      'username' => 'root',
        //      'password' => '12345678',
        //      'charset'   => 'utf8',
        //      'collation' => 'utf8_unicode_ci',
        //      'prefix'    => '',
        //  ],
        'db' => [
            'driver' => getenv('DB_DRIVER'),
             'host' => getenv('DB_HOST'),
             'database' => getenv('DB_NAME'),
             'username' => getenv('DB_USER'),
             'password' => getenv('DB_PASS'),
             'charset'   => 'utf8',
             'collation' => 'utf8_unicode_ci',
             'prefix'    => '',
         ],

    ],
];
