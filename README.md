# Extensions For Grifus · Copy Movie Grifus

[![Latest Stable Version](https://poser.pugx.org/eliasis-framework/copy-movie-grifus/v/stable)](https://packagist.org/packages/eliasis-framework/copy-movie-grifus)
[![License](https://poser.pugx.org/eliasis-framework/copy-movie-grifus/license)](LICENSE)

[Versión en español](README-ES.md)

Copy Movie Grifus add a new button in the film pages of the Grifus theme with which you can copy the complete information with a single click.

![image](resources/banner-1544x500.png)

---

- [Requirements](#requirements)
- [Installation](#installation)
- [Images](#images)
- [Tests](#tests)
- [Sponsor](#Sponsor)
- [License](#license)

---

## Requirements

This module is supported by **PHP versions 5.6** or higher and is compatible with **HHVM versions 3.0** or higher.

## Installation

You can download the full plugin from the [official repository](https://es.wordpress.org/plugins/extensions-for-grifus/) in WordPress.

Or install plugin module from [Composer](http://getcomposer.org/download/). In the root folder of Extensions For Grifus plugin run:

    composer require eliasis-framework/copy-movie-grifus

## Images

![image](resources/screenshot-5.png)
![image](resources/screenshot-6.png)
![image](resources/screenshot-7.png)
![image](resources/screenshot-8.png)
![image](resources/screenshot-9.png)

## Tests

To run [tests](tests) you just need [composer](http://getcomposer.org/download/) and to execute the following:

    git clone https://github.com/eliasis-framework/copy-movie-grifus.git
    
    cd copy-movie-grifus

    composer install

Run [WordPress](https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/) code standard tests with [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

    composer phpcs

Run [PHP Mess Detector](https://phpmd.org/) tests to detect inconsistencies in code style:

    composer phpmd

Run all previous tests:

    composer tests

[PHPUnit](https://phpunit.de/): Unit tests for this module will be performed in the [plugin](https://github.com/Josantonius/extensions-for-grifus#tests) repository.

## Sponsor

If this project helps you to reduce your development time,
[you can sponsor me](https://github.com/josantonius#sponsor) to support my open source work :blush:

## License

This repository is licensed under the [GPL-2.0 License](LICENSE).

Copyright © 2017-2022, [Josantonius](https://github.com/josantonius#contact)
