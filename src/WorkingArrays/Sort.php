<?php

namespace Alura\WorkingArrays;

class Sort
{
    private array $balances;

    public function __construct(array $balances)
    {
        $this->balances = $balances;
    }

    public function ascending(): void
    {
        sort($this->balances);
    }

    public function descending(): void
    {
        rsort($this->balances);
    }

    public function getSortedValues(): void
    {
        print_r(array_values($this->balances));

        echo '====================================' . PHP_EOL;
    }
}


