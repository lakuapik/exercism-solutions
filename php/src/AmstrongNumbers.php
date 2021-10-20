<?php

namespace App;

/**
 * @see https://exercism.org/tracks/php/exercises/armstrong-numbers
 */
class AmstrongNumbers
{
    public static function determine(int $number): bool
    {
        return $number == array_reduce(
            str_split($number),
            fn ($carry, $digit) => $carry + pow($digit, strlen($number))
        );
    }
}
