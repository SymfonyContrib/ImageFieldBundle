**This code is part of the [SymfonyContrib](http://symfonycontrib.com/) community.**

# Symfony2 ImageFieldBundle

Extends the [FileFieldBundle](https://github.com/SymfonyContrib/FileFieldBundle)
to provide additional image specific functionality.

###Features:

* Image preview.
* ...more to come.

## Installation

Installation is similar to a standard bundle.
http://symfony.com/doc/current/cookbook/bundles/installation.html

* Add bundle to composer.json: https://packagist.org/packages/symfonycontrib/imagefield-bundle
* Add bundle to AppKernel.php:

```php
new SymfonyContrib\Bundle\ImageFieldBundle\ImageFieldBundle(),
```

* jQuery is required but not provided by this bundle.
* Include JS files (after FileField JS files):
    * 'bundles/imagefield/js/jquery.imagefield-ui.js'

## Usage

You can simple replace any [FileField](https://github.com/SymfonyContrib/FileFieldBundle)
with an ImageField by changing the field type to 'imagefield'. All options
and features of FileField still apply.

```php
    $builder->add('photo', 'imagefield', [
    ...
    ]);
```
