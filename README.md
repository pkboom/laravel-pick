# Very short description of the package

[![Latest Stable Version](https://poser.pugx.org/pkboom/laravel-pick/v)](//packagist.org/packages/pkboom/laravel-pick)
[![Total Downloads](https://poser.pugx.org/pkboom/laravel-pick/downloads)](//packagist.org/packages/pkboom/laravel-pick)

This is where your description should go. Try and limit it to a paragraph or two.
<img src="/images/demo.png" width="800"  title="demo">

## Installation

You can install the package via composer:

```bash
composer require pkboom/pick
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Pkboom\Pick\PickServiceProvider" --tag="laravel-pick-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --provider="Pkboom\Pick\PickServiceProvider" --tag="laravel-pick-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravel-pick = new Pkboom\Pick();
echo $laravel-pick->echoPhrase('Hello, pkboom!');
```

## Testing

```bash
composer test
```
