# Guard Clauses library for Laravel.

[![Latest Stable Version](http://poser.pugx.org/visifo-php/laravel-guard-clauses/v)](https://packagist.org/packages/visifo-php/laravel-guard-clauses)
[![Total Downloads](http://poser.pugx.org/visifo-php/laravel-guard-clauses/downloads)](https://packagist.org/packages/visifo-php/laravel-guard-clauses)
[![License](http://poser.pugx.org/visifo-php/laravel-guard-clauses/license)](https://packagist.org/packages/visifo-php/laravel-guard-clauses)
[![PHP Version Require](http://poser.pugx.org/visifo-php/laravel-guard-clauses/require/php)](https://packagist.org/packages/visifo-php/laravel-guard-clauses)

[![codecov](https://codecov.io/gh/visifo-php/laravel-guard-clauses/branch/main/graph/badge.svg?token=???)](https://codecov.io/gh/visifo-php/laravel-guard-clauses)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/visifo-php/laravel-guard-clauses/run-tests?label=tests)](https://github.com/visifo-php/laravel-guard-clauses/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/visifo-php/laravel-guard-clauses/Check%20&%20fix%20styling?label=code%20style)](https://github.com/visifo-php/laravel-guard-clauses/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)

[![composer.lock](http://poser.pugx.org/visifo-php/laravel-guard-clauses/composerlock)](https://packagist.org/packages/visifo-php/laravel-guard-clauses)
[![.gitattributes](http://poser.pugx.org/visifo-php/laravel-guard-clauses/gitattributes)](https://packagist.org/packages/visifo-php/laravel-guard-clauses)

---
## Manual TODOs 

### discussions
- [ ] Enable discussions for your repository: Settings -> Options -> Features / Discussions

### [codecov](https://codecov.io/)

- [ ] Replace codecov token or the whole badge! Can be found under:
https://codecov.io/gh/visifo-php/laravel-guard-clauses/settings/badge
or Settings -> Badge

- [ ] Configure repository secrets.CODECOV_TOKEN. See: [Github docu - Adding secrets for a repository](https://docs.github.com/en/codespaces/managing-codespaces-for-your-organization/managing-encrypted-secrets-for-your-repository-and-organization-for-codespaces#adding-secrets-for-a-repository)

---

This repo can be used to scaffold a Laravel package. Follow these steps to get started:

1. Press the "Use template" button at the top of this repo to create a new repo with the contents of this laravel-guard-clauses
2. Run "php ./configure.php" to run a script that will replace all placeholders throughout all the files
3. Remove this block of text.
4. Have fun creating your package.
5. If you need help creating a package, consider picking up Spaties <a href="https://laravelpackage.training">Laravel Package Training</a> video course.
---

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.


## Installation

You can install the package via composer:

```bash
composer require visifo-php/laravel-guard-clauses
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-guard-clauses_without_prefix-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --tag="laravel-guard-clauses_without_prefix-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="example-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravel-guard-clauses = new visifo-namespace\Guard();
echo $laravel-guard-clauses->echoPhrase('Hello, visifo-namespace!');
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

- [Sergej Tihonov](https://github.com/Sergej-Tihonov)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
