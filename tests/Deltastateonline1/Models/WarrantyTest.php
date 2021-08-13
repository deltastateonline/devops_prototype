<?php

namespace Deltastateonline1\Models;

use PHPUnit\Framework\TestCase;

class WarrantyTest extends TestCase {

    public function testWarrantyCalculate(){

        $fifty = \Deltastateonline\Models\Warranty::calculate(100);
        $this->assertEquals($fifty , 50.0);
    }

}