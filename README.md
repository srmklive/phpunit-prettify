[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/srmklive/phpunit-prettify.svg?style=flat-square)](https://packagist.org/packages/srmklive/phpunit-prettify)
[![StyleCI](https://styleci.io/repos/115527266/shield?branch=master)](https://styleci.io/repos/115527266)
[![Build Status](https://travis-ci.org/srmklive/phpunit-prettify.svg?branch=master)](https://travis-ci.org/srmklive/phpunit-prettify)

# Introduction

This package provides support to prettify PHPUnit results output for PHPUnit 6+. 

# Credits

This package is a fork of [PHPUnit Result Printer](https://packagist.org/packages/codedungeon/phpunit-result-printer) by Mike Erickson:

E-Mail: [codedungeon@gmail.com](mailto:codedungeon@gmail.com)

Twitter: [@codedungeon](http://twitter.com/codedungeon)

Website: [https://github.com/mikeerickson](https://github.com/mikeerickson) 

## Installation

Installation is provided via composer and can be done with the following command:

```bash
composer require srmklive/phpunit-prettify
```

To activate the Printer for PHPUnit, just add it to your configuration XML:

  ```xml
  <?xml version="1.0" encoding="UTF-8"?>
    <phpunit printerClass="Srmklive\PHPUnitPrettify\Printer">
      // ....
    </phpunit>
  ```

Or from Command-Line:

  ```bash
  phpunit --printer=Srmklive\\PHPUnitPrettify\\Printer
  ```

### Screenshot

![Screenshot](https://github.com/srmklive/phpunit-prettify/blob/master/sample.png)
