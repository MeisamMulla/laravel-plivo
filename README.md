# Plivo for Laravel
This is a simple wrapper around `plivo/plivo-php` that creates a `Plivo` facade for Laravel.

## Installation
Navigate your your laravel installation and type the following into the command line 

```bash
composer require meisam-mulla/laravel-plivo
```

Add the following in your ServiceProvider array in config/app.php

```php
MeisamMulla\Plivo\ServiceProvider::class,
```

Add the following to your aliases array
```php
MeisamMulla\Plivo\Facade::class,
```

Run `php artisan vendor:publish`

Add the following lines at the bottom of your .env:

```env
PLIVO_AUTH_ID=YOURAUTHID
PLIVO_AUTH_TOKEN=YOURAUTHTOKEN
```

Your Auth ID and Token can be found in your Plivo dashboard.

## Usage
Refer to the [PHP Helper Docs](https://www.plivo.com/docs/helpers/php/#methods) for all the methods available. Simple example on how to send a SMS:

```php
<?php
namespace App\Http\Controllers;

use Plivo;

class PlivoTestController extends Controller {
    public function sendMessage() {
        Plivo::send_message([
            'src' => '16045555555',
            'dst' => '17785555555',
            'text' => 'This is a text message',
        ]);
    }
}

```