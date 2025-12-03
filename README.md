# Reproduction repository for https://github.com/orchestral/testbench-core/issues/372

[![Latest Version on Packagist](https://img.shields.io/packagist/v/esign/orchestral-testbench-core-uses-vendor.svg?style=flat-square)](https://packagist.org/packages/esign/orchestral-testbench-core-uses-vendor)
[![Total Downloads](https://img.shields.io/packagist/dt/esign/orchestral-testbench-core-uses-vendor.svg?style=flat-square)](https://packagist.org/packages/esign/orchestral-testbench-core-uses-vendor)
![GitHub Actions](https://github.com/esign/orchestral-testbench-core-uses-vendor/actions/workflows/main.yml/badge.svg)

A short intro about the package.

## Installation

You can install the package via composer:

```bash
composer require esign/orchestral-testbench-core-uses-vendor
```

The package will automatically register a service provider.

Next up, you can publish the configuration file:
```bash
php artisan vendor:publish --provider="Esign\OrchestralTestbenchCoreUsesVendor\OrchestralTestbenchCoreUsesVendorServiceProvider" --tag="config"
```

## Usage

### Testing

```bash
composer test
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
