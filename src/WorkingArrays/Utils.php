<?php

declare(strict_types=1);

namespace Alura\WorkingArrays;

use InvalidArgumentException;

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
        echo 'Using the array_merge:' . PHP_EOL;

        return array_merge($array, $array2);
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function combine($array, $array2): array
    {
        echo 'Using the array_combine:' . PHP_EOL;

        if (count($array) != count($array2)) {
            throw new InvalidArgumentException(
                'Please, add a value for the element created on array.' . PHP_EOL
            );
        }

        return array_combine($array, $array2);
    }

    public static function keyExists(int|string $key, array $array): bool
    {
        return array_key_exists($key, $array);
    }
}
