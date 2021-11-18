<?php

declare(strict_types=1);

namespace Alura\WorkingArrays;

class Utils
{
    public static function remove(string|int $value, array &$array)
    {
        $position = array_search($value, $array, true);
        
        if (is_int($position)) {
            unset($array[$position]);
        }
    }
}