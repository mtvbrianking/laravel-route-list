## Laravel Route List.

[![Github Action](https://github.com/mtvbrianking/laravel-route-list/workflows/run-tests/badge.svg)](https://github.com/mtvbrianking/laravel-route-list/actions?query=workflow:run-tests)
[![Github Action](https://github.com/mtvbrianking/laravel-route-list/workflows/gen-docs/badge.svg)](https://mtvbrianking.github.io/laravel-route-list/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/mtvbrianking/laravel-route-list/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/mtvbrianking/laravel-route-list/?branch=master)
[![Scrutinizer Code Coverage](https://scrutinizer-ci.com/g/mtvbrianking/laravel-route-list/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/mtvbrianking/laravel-route-list/?branch=master)
[![StyleCI](https://github.styleci.io/repos/272880343/shield?branch=master)](https://github.styleci.io/repos/272880343)

### [Installation](https://packagist.org/packages/bmatovu/laravel-route-list)

Install via Composer package manager:

```bash
composer require bmatovu/laravel-route-list
```

Enable debug mode

```bash
APP_DEBUG=true
```

Publish assets

```bash
php artisan vendor:publish --provider="Bmatovu\RouteList\RouteListServiceProvider"
```

Usage

The package creates a dedicated route to view routes.

```bash
http://localhost:8000/route-list
```

Alternative, you can use the view component. [See example](/resources/views/index.blade.php)

```html
<x-route-list-table/>
```

Note: _This package uses Bootstrap CSS styling._
