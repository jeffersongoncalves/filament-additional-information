<div class="filament-hidden">

![Filament Additional Information](https://raw.githubusercontent.com/jeffersongoncalves/filament-additional-information/1.x/art/jeffersongoncalves-filament-additional-information.png)

</div>

# Filament Additional Information

[![Buy Me A Coffee](https://img.shields.io/badge/Buy%20Me%20A%20Coffee-support-FFDD00?style=flat-square&logo=buy-me-a-coffee&logoColor=black)](https://buymeacoffee.com/jeffersongoncalves)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-additional-information.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-additional-information)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-additional-information/fix-php-code-style-issues.yml?branch=1.x&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-additional-information/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3A1.x)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-additional-information.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-additional-information)
[![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-additional-information.svg?style=flat-square)](LICENSE.md)

## Description

A reusable Filament infolist `Section` that shows record timestamps (such as created and updated dates) through a single `make()` factory. Pass any list of date columns and it renders a translated `Section` with one `TextEntry` per column, formatted as date-time. Use it to avoid hand-rolling the same "Additional Information" block on every resource infolist.

## Version Compatibility

| Plugin Version | Filament Version | PHP Version |
| -------------- | ---------------- | ----------- |
| `^1.0`         | `^3.0`           | `^8.1`      |
| `^2.0`         | `^4.0`           | `^8.2`      |
| `^3.0`         | `^5.0`           | `^8.3`      |

## Installation

You can install the package via composer:

```bash
composer require jeffersongoncalves/filament-additional-information:^1.0
```

## Usage

Add the section to any Filament infolist schema. By default it renders the `created_at` and `updated_at` entries:

```php
use JeffersonGoncalves\Filament\AdditionalInformation\AdditionalInformation;

public static function infolist(Infolist $infolist): Infolist
{
    return $infolist->schema([
        // ... your other components
        AdditionalInformation::make(),
    ]);
}
```

Pass your own list of date columns to customize which timestamps are shown:

```php
AdditionalInformation::make(['created_at', 'updated_at', 'deleted_at']);
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jèfferson Gonçalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
