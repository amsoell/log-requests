# Log Requests

[![Latest Version on Packagist](https://img.shields.io/packagist/v/amsoell/log-requests.svg?style=flat-square)](https://packagist.org/packages/amsoell/log-requests)
[![Total Downloads](https://img.shields.io/packagist/dt/amsoell/log-requests.svg?style=flat-square)](https://packagist.org/packages/amsoell/log-requests)

Log all outgoing requests and incoming responses from the Laravel HTTP client. Useful when developing apps that interact with third-party APIs.

## Installation

You can install the package via composer:

```bash
composer require amsoell/log-requests
```

## Usage

Out-of-the-box, log-requests will log all outgoing / incoming HTTP responses to the default logging driver. This configuration can be changed by updating the `config/log-requests.php` configuration file to use your application's driver of choice.

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email ams@amsoell.com instead of using the issue tracker.

## Credits

-   [Andy Soell](https://github.com/amsoell)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
