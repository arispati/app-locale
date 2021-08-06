# App Locale
Localization for Laravel and Lumen Framework

## Description
This package will set the locale of the application by the request that contains the `App-Locale` attribute in the header

## How to Install
- Install with composer
```bash
composer require arispati/app-locale
```

### Laravel
- Register the middleware
```php
// app/Http/Kernel.php
protected $middleware = [
    // ...
    \Arispati\AppLocale\Middleware\AppLocale::class
];
```

### Lumen
- Register the middleware
```php
// bootstrap/app.php
$app->middleware([
    \Arispati\AppLocale\Middleware\AppLocale::class
]);
```

- if you want to use `Facade`
```php
// bootstrap/app.php

// Enabled Facade
$app->withFacades(true, [
    '\Arispati\AppLocale\Facades\AppLocale' => 'AppLocale'
]);

// Register service provider
$app->register(\Arispati\AppLocale\ServiceProvider::class);
```

## Available Method
- Set app locale
```php
AppLocale::setLocale('id'); // set app locale to 'id' (Bahasa Indonesia)
```

- Get app locale
```php
AppLocale::getLocale();
```