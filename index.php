<?php

require 'vendor/autoload.php';

use Alura\WorkingArrays\Sort;
use Alura\WorkingArrays\Transform;

$balances = [
    3400, 2000, 500, 700, 4800, 5000,
];

$sort = new Sort($balances);
$sort->ascending();
$sort->getSortedValues();

echo "=========================================" . PHP_EOL;

$phrase = 'There are 5 things in my house: TV, freeze, cabinet, computer, table';

$transformer = new Transform($phrase, ', ');

$words = $transformer->toArray();

print_r($words);

echo $transformer->toString($words);
