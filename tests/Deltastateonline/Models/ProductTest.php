<?php

namespace Deltastateonline\Models;

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase {

    public function testProductCalculate(){

        $twentyfive = Deltastateonline\Models\Product::calculate(100);
        $this->assertEquals($twentyfive , 25.0);
    }

}