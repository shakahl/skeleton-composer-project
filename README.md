Composer package repository skeleton
===============

This is a skeleton project for PHP based Composer package repositories.

Features
--------

-   DRY concept
-   Unit testing with [PHPUnit](https://phpunit.de/)
-   Another feature

Installation
------------

https://packagist.org/packages/shakahl/skeleton-composer-project

Add `shakahl/skeleton-composer-project` as a requirement to `composer.json`:

```json
{
    "require": {
        "shakahl/skeleton-composer-project": "dev-master"
    }
}
```

Update your packages with `composer update` or install with `composer install`.

You can also add the package using `composer require shakahl/skeleton-composer-project` and later specifying the version you want (for now, `dev-master` is your best bet).

Usage example
-------------

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Example code for usage...
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Unit testing
------------

### Under Windows

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
$ composer update
$ vendor/bin/phpunit​.bat
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 

### Under Linux

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
$ composer update
$ vendor/bin/phpunit​
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
