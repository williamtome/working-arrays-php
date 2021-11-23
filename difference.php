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

$nonPayingAccountHolders = [
    'Maria',
    'Lucas',
    'William'
];

$payingAccountHolders = Utils::different($accountHolders, $nonPayingAccountHolders);

print_r($payingAccountHolders);
