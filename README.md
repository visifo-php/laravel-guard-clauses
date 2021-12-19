# :package_description

[![Latest Stable Version](http://poser.pugx.org/:vendor_slug/:package_slug/v)](https://packagist.org/packages/:vendor_slug/:package_slug)
[![Total Downloads](http://poser.pugx.org/:vendor_slug/:package_slug/downloads)](https://packagist.org/packages/:vendor_slug/:package_slug)
[![License](http://poser.pugx.org/:vendor_slug/:package_slug/license)](https://packagist.org/packages/:vendor_slug/:package_slug)
[![PHP Version Require](http://poser.pugx.org/:vendor_slug/:package_slug/require/php)](https://packagist.org/packages/:vendor_slug/:package_slug)

[![codecov](https://codecov.io/gh/:vendor_slug/:package_slug/branch/main/graph/badge.svg?token=???)](https://codecov.io/gh/:vendor_slug/:package_slug)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/:vendor_slug/:package_slug/run-tests?label=tests)](https://github.com/:vendor_slug/:package_slug/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/:vendor_slug/:package_slug/Check%20&%20fix%20styling?label=code%20style)](https://github.com/:vendor_slug/:package_slug/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)

[![composer.lock](http://poser.pugx.org/:vendor_slug/:package_slug/composerlock)](https://packagist.org/packages/:vendor_slug/:package_slug)
[![.gitattributes](http://poser.pugx.org/:vendor_slug/:package_slug/gitattributes)](https://packagist.org/packages/:vendor_slug/:package_slug)

---
## Manual TODOs 

### discussions
- [ ] Enable discussions for your repository: Settings -> Options -> Features / Discussions

### [codecov](https://codecov.io/)

- [ ] Replace codecov token or the whole badge! Can be found under:
https://codecov.io/gh/:vendor_slug/:package_slug/settings/badge
or Settings -> Badge

- [ ] Configure repository secrets.CODECOV_TOKEN. See: [Github docu - Adding secrets for a repository](https://docs.github.com/en/codespaces/managing-codespaces-for-your-organization/managing-encrypted-secrets-for-your-repository-and-organization-for-codespaces#adding-secrets-for-a-repository)

---

This repo can be used to scaffold a Laravel package. Follow these steps to get started:

1. Press the "Use template" button at the top of this repo to create a new repo with the contents of this skeleton
2. Run "php ./configure.php" to run a script that will replace all placeholders throughout all the files
3. Remove this block of text.
4. Have fun creating your package.
5. If you need help creating a package, consider picking up Spaties <a href="https://laravelpackage.training">Laravel Package Training</a> video course.
---

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.


## Installation

You can install the package via composer:

```bash
composer require :vendor_slug/:package_slug
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag=":package_slug_without_prefix-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --tag=":package_slug_without_prefix-config"
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
$skeleton = new VendorName\Skeleton();
echo $skeleton->echoPhrase('Hello, VendorName!');
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

- [:author_name](https://github.com/:author_username)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
