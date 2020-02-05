# Laravel kDrive Storage Driver

[![Latest Version on Packagist][icon-version]][link-packagist]
[![Software License][icon-license]](LICENSE.md)
[![Total Downloads][icon-license]][link-packagist]

This package contains an [Infomaniak kDrive](https://www.infomaniak.com/en/kdrive/) storage driver for Laravel.

## Installation
Via [Composer](https://getcomposer.org/)
```shell script
composer require infomaniak/laravel-kdrive
```

### Register the Service Provider
Starting with laravel 5.5, the Service Provider is automatically registered so may skip this instruction.

Add the Service provider to your `config/app.php` file:

```php
'providers' => [
    \Infomaniak\KDrive\KDriveServiceProvider::class,
],
```

### Configure a new disk
Add a new disk to your `config/filesystems.php` file:

```php
'disks' => [
    'kdrive' => [
        'driver' => 'kdrive',
        'id' => env('KDRIVE_ID'),
        'username' => env('KDRIVE_USERNAME'),
        'password' => env('KDRIVE_PASSWORD'),
        'prefix' => env('KDRIVE_PREFIX', ''),
    ]
],
```

### Setup your .env file
Add your credentials to your `.env` file. See [Credentials](#credentials) for more information on obtaining them.

```
KDRIVE_ID=123456
KDRIVE_USERNAME=john.doe@example.tld
KDRIVE_PASSWORD=********************
KDRIVE_PREFIX=
```

The `KDRIVE_PREFIX` is optional an you may remove it from you `.env` file is you do not use it. This settings allows you to define another folder as your root.

## Credentials
To be able to connect to your kDrive, you'll need the following information.

1. Your kDrive ID ([Find your kDrive ID](#find-your-kdrive-id))
2. Your login email address (the one you'd use on https://manager.infomaniak.com)
3. A unique application password ([Generate an application password](https://manager.infomaniak.com/v3/profile/application-password))

### Find your kDrive ID
1. Connect to your kDrive directly on Infomaniak
2. Find your drive's ID in the URL : `https://drive.infomaniak.com/app/drive/[ID]/files`

## License
The MIT License (MIT). Please see the [LICENSE](LICENSE.md) for more information.

[icon-version]: https://img.shields.io/packagist/v/infomaniak/laravel-kdrive?style=flat-square
[icon-license]: https://img.shields.io/packagist/l/infomaniak/laravel-kdrive?style=flat-square
[icon-downloads]: https://img.shields.io/packagist/dt/infomaniak/laravel-kdrive?style=flat-square
[link-packagist]: https://packagist.org/packages/infomaniak/laravel-kdrive
