<?php

return [
    /*
     * The endpoint to access the routes.
     */

    'url' => 'routes',

    /*
     * The middleware(s) to apply before attempting to access routes pages (web + api).
     */

    'middlewares' => [],

    /*
     * The middleware(s) to apply before attempting to access WEB route page.
     */

    'web_middleware' => 'web',

    /*
     * The middleware(s) to apply before attempting to access API route.
     */

    'api_middleware' => 'api',

    /*
     * Indicates whether to enable pretty routes only when debug is enabled (APP_DEBUG).
     */

    'debug_only' => true,

    /*
     * The methods to hide.
     */

    'hide_methods' => [
        'HEAD',
    ],

    /*
     * The routes to hide with regular expression
     */

    'hide_matching' => [
        '#^_debugbar#',
        '#^_ignition#',
        '#^telescope#',
        '#^routes#',
    ],

    /*
     * Set a light or dark themes.
     *
     * Available:
     *   light  - always chooses a light theme.
     *   dark   - always chooses a dark theme.
     *   auto   - automatic theme detection from browser.
     *
     * By default, auto.
     */

    'color_scheme' => 'auto',

    /*
     * If routes are not separated by a domain, this column is hidden from display by default.
     *
     * If you want to always show the column with the domain name, set the value to "true".
     *
     * By default, false.
     */

    'domain_force' => false,
];
