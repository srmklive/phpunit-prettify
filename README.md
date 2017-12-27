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
composer require srmklive/phpunit-result-printer
```

To activate the Printer for PHPUnit, just add it to your configuration XML:

  ```xml
  <?xml version="1.0" encoding="UTF-8"?>
    <phpunit printerClass="Srmklive\PHPUnitPrettyResultPrinter\Printer">
      // ....
    </phpunit>
  ```

Or from Command-Line:

  ```bash
  phpunit --printer=Srmklive\\PHPUnitPrettyResultPrinter\\Printer
  ```

### Screenshot

![Screenshot](https://github.com/mikeerickson/phpunit-pretty-result-printer/blob/master/sample.png)
