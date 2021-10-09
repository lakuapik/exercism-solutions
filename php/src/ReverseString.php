<?php

namespace App;

/**
 * @link https://exercism.org/tracks/php/exercises/hello-world
 */
class ReverseString
{
    public static function handle(string $text): string
    {
        // return strrev($text);
        return join(array_reverse(str_split($text)));
    }
}
