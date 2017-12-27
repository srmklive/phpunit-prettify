<?php

namespace Srmklive\PHPUnitPrettify;

use PHPUnit\Framework\Test;
use PHPUnit\TextUI\ResultPrinter as Printer;

class ResultPrinter extends Printer
{
    public function startTest(Test $test)
    {
        $this->className = get_class($test);
        parent::startTest($test);
    }
}
