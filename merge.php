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
    'Mateus',
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

try {
    $accountHoldersAndBalances = Utils::combine($accountHolders, $balances);
    print_r($accountHoldersAndBalances);
} catch (Exception $exception) {
    echo $exception->getMessage();
}

