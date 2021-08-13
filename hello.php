<?php
// Autoload files using the Composer autoloader.
require_once __DIR__ . '/vendor/autoload.php';

use Deltastateonline\Models;

echo Models\Product::calculate(12.6), "\n";
echo Models\Warranty::calculate(3.90), "\n";

?>