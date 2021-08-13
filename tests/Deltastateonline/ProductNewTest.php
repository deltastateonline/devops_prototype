<?php

namespace Deltastateonline;

use PHPUnit\Framework\TestCase;

class ProductNewTest extends TestCase {

    public function testProductCalculate(){

        $twentyfive = \Deltastateonline\Models\Product::calculate(100);
        $this->assertEquals($twentyfive , 25.0);
    }

}