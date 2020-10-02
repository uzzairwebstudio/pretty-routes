Pretty Routes for Laravel
====

Visualise your routes in pretty format.

<p align="center">
    <img src="/.github/home-page-images/screenshot.png?raw=true" alt="Pretty Routes"/>
</p>

[![StyleCI Status][badge_styleci]][link_styleci]
[![For Laravel][badge_laravel]][link_packagist]
[![Stable Version][badge_stable]][link_packagist]
[![Unstable Version][badge_unstable]][link_packagist]
[![Total Downloads][badge_downloads]][link_packagist]
[![License][badge_license]][link_license]

# Installation

```bash
composer require andrey-helldar/pretty-routes
```

If your using autodiscovery in Laravel, it should just work.

Otherwise - add to your `config/app.php` providers array to where all your package providers are (before your app's providers):

```php
PrettyRoutes\ServiceProvider::class,
```

By default, the package exposes a `/routes` url. If you wish to configure this, publish the config.

```bash
php artisan vendor:publish --provider="PrettyRoutes\ServiceProvider"
```

If accessing `/routes` isn't working, ensure that you've included the provider within the same area as all your package providers (before all your app's providers) to ensure it takes priority.

By default, pretty routes only enables itself when `APP_DEBUG` env is true. You can configure this on the published config as above, or add any custom middlewares.

[badge_styleci]:    https://styleci.io/repos/130698068/shield
[badge_laravel]:    https://img.shields.io/badge/Laravel-6.x%20%7C%207.x%20%7C%208.x-orange.svg?style=flat-square
[badge_stable]:     https://img.shields.io/github/v/release/andrey-helldar/pretty-routes?label=stable&style=flat-square
[badge_unstable]:   https://img.shields.io/badge/unstable-dev--master-orange?style=flat-square
[badge_downloads]:  https://img.shields.io/packagist/dt/andrey-helldar/pretty-routes.svg?style=flat-square
[badge_license]:    https://img.shields.io/packagist/l/andrey-helldar/pretty-routes.svg?style=flat-square

[link_styleci]:     https://github.styleci.io/repos/130698068
[link_packagist]:   https://packagist.org/packages/andrey-helldar/pretty-routes
[link_license]:     LICENSE