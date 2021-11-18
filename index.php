<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Alura\WorkingArrays\Sort;
use Alura\WorkingArrays\Transform;
use Alura\WorkingArrays\Utils;

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

echo $transformer->toString($words) . PHP_EOL;

echo "=========================================" . PHP_EOL;

$accountHoldersAndBuyies = [
    'William',
    'Maria',
    15,
    'João',
    49,
    'Debora',
    '15',
];

print_r($accountHoldersAndBuyies);

Utils::remove(15, $accountHoldersAndBuyies);

print_r($accountHoldersAndBuyies);