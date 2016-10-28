# Impersonate
[![Build Status](https://travis-ci.org/nckg/laravel-impersonate.svg?branch=master)](https://travis-ci.org/nckg/laravel-impersonate) [![Packagist](https://img.shields.io/packagist/v/nckg/laravel-impersonate.svg?maxAge=2592000?style=flat-square)](https://github.com/nckg/laravel-impersonate) [![Packagist](https://img.shields.io/packagist/dt/nckg/laravel-impersonate.svg?maxAge=2592000?style=flat-square)](https://github.com/nckg/laravel-impersonate)

## Introduction

Easily impersonate any user in your Laravel Application

## Installation

You can install the package via composer:

``` bash
composer require nckg/laravel-laravel-impersonate
```
Add following code to your user model:
```php
    class User 
    {
        use \Nckg\Impersonate\Traits\CanImpersonate;
    }
```

Add following code to your routes file:
```php
    Route::get('users/{id}/impersonate', function ($id) {
        \Auth::user()->impersonate($id);
        return redirect()->back();
    });
    Route::get('users/stop-impersonate', function () {
        \Auth::user()->stopImpersonating();
        return redirect()->back();
    });
```

If you are using Laravel you can add the middleware to your middleware providers

```php
// app/Http/Kernel.php
/**
 * The application's global HTTP middleware stack.
 *
 * @var array
 */
protected $middleware = [
    ...
    \Nckg\Impersonate\Impersonate::class,
];
```

## Testing

``` bash
composer test
```

## License

The MIT License (MIT).
