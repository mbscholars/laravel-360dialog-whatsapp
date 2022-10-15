# Laravel Whatsapp Integration with 360Dialog

I am building this package to help laravel developers integrate a robust whatsapp messaging to their projects

## Support me



## Installation

You can install the package via composer:

```bash
composer require mbscholars/laravel-whatsapp-with-360dialog
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-whatsapp-with-360dialog-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-whatsapp-with-360dialog-views"
```

## Usage

```php
$whatsappDialog = new Mbscholars\WhatsappDialog();
echo $whatsappDialog->echoPhrase('Hello, Mbscholars!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Sunday Mba](https://github.com/mbscholars)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
