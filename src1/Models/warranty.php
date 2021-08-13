<?php
namespace Deltastateonline\Models;

class Warranty{

    public function __toString(): String{
        return static::class;
    }

    public static function calculate($value) {
        return $value * 0.5;
    }
    
}