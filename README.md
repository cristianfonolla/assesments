# assesments

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

**Note:** Replace ```Cristian fonolla``` ```cristianfonolla``` ```https://github.com/cristianfonolla``` ```cristian.fonolla@gmail.com``` ```scool``` ```assesments``` `````` with their correct values in [README.md](README.md), [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [LICENSE.md](LICENSE.md) and [composer.json](composer.json) files, then delete this line. You can run `$ php prefill.php` in the command line to make all replacements at once. Delete the file prefill.php as well.

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what
PSRs you support to avoid any confusion with users and contributors.

## Installation ##

In a Laravel project execute: 

```bash
composer require scool/assesments
```

Add to file **config/app.php** the CurriculumServiceProvider:

```
...
 /*
 * Package Service Providers...
 */
 Scool\Assesments\Providers\AssesmentServiceProvider::class,
... 
```

And publish files with:

```bash
php artisan vendor:publish --tag=scool_assesments
```

## Usage

``` php
$skeleton = new Scool\Assesments();
echo $skeleton->echoPhrase('Hello, League!');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email cristian.fonolla@gmail.com instead of using the issue tracker.

## Credits

- [Cristian fonolla][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/scool/assesments.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/scool/assesments/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/scool/assesments.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/scool/assesments.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/scool/assesments.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/scool/assesments
[link-travis]: https://travis-ci.org/scool/assesments
[link-scrutinizer]: https://scrutinizer-ci.com/g/scool/assesments/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/scool/assesments
[link-downloads]: https://packagist.org/packages/scool/assesments
[link-author]: https://github.com/cristianfonolla
[link-contributors]: ../../contributors
