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

    public static function different($array, $array2): array
    {
        return array_diff($array, $array2);
    }

    public static function merge($array, $array2)
    {
        echo 'Usando o array_merge:' . PHP_EOL;

        return array_merge($array, $array2);
    }

    public static function combine($array, $array2)
    {
        echo 'Usando o array_combine:' . PHP_EOL;

        return array_combine($array, $array2);
    }
}
