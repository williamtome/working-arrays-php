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
        foreach ($this->balances as $balance) {
            echo $balance . PHP_EOL;
        }

        echo '====================================' . PHP_EOL;
    }
}


