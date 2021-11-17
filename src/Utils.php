<?php

namespace Alura\WorkingArrays;

class Utils
{
    public static function remove(string $value, array &$array)
    {
        $position = array_search($value, $array);
        
        if (is_int($position)) {
            unset($array[$position]);
        }
    }
}
