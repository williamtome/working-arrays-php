<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Alura\WorkingArrays\Utils;

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
