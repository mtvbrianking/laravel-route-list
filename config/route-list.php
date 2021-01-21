<?php

return [
    /*
     * Application mode (APP_DEBUG)
     */
    'debug' => true,

    /*
     * Route prefix
     */
    'prefix' => 'route-list',

    /*
     * Route pre-middleware
     */
    'middleware' => [
        'web',
        // 'auth',
    ],

    /**
     * Rename route name matching the given pattern.
     */
    'rename' => [
        '/^generated::/' => '',
    ],

    /*
     * Routes to exclude.
     * Use a regex pattern matching the desired route path not name.
     */
    'excluded' => [
        // '/^_debugbar/',
        // '/^_ignition/',
        // '/^schematics/',
        // '/^telescope/',
    ],
];
