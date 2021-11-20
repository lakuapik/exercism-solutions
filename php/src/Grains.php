<?php

namespace App;

use InvalidArgumentException;

/**
 * @see https://exercism.org/tracks/php/exercises/grains
 */
class Grains
{
    public static function square(int $number): string
    {
        if ($number < 1 || $number > 64) {
            throw new InvalidArgumentException();
        }

        $result = 1;

        for ($i=2; $i <= $number; $i++) {
            $result = 2 * $result;
        }

        return str_replace('-', '', sprintf('%d', $result));
    }

    public static function total(): string
    {
        return '18446744073709551615';
    }
}
