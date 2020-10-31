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

    /*
     * Routes to exclude
     */
    'excluded' => [
        '/^_ignition/',
    ],
];
