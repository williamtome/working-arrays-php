<?php

require 'vendor/autoload.php';

use Alura\WorkingArrays\Utils;

$accountHolders = [
    'William',
    'João',
    'Maria',
    'Débora',
    'Cláudio',
    'Lucas',
];

$balances = [
    1000,
    500,
    3000,
    7250,
    225.5,
    100,
];

$accountHoldersAndBalances = Utils::merge($accountHolders, $balances);

print_r($accountHoldersAndBalances);

echo '========================================' . PHP_EOL;

$accountHoldersAndBalances = Utils::combine($accountHolders, $balances);

print_r($accountHoldersAndBalances);

