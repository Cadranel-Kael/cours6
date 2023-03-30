<?php

namespace Core;

class Validator
{
    public static function correctRequest(array $array, string $key): bool
    {
        return array_key_exists($key, $array);
    }

    /**
     * Checks if $string (without spaces) is between $min and $max
     **/
    public static function between(string $string, int $max = INF, int $min = 1): bool
    {
        return strlen(trim($string)) < $max && strlen(trim($string)) > $min;
    }
}