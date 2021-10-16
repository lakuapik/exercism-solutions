<?php

namespace App;

/**
 * @see https://exercism.org/tracks/php/exercises/raindrops
 */
class Raindrops
{
    public static function handle(int $number): string
    {
        $result = '';
        $result .= $number % 3 == 0 ? 'Pling' : '';
        $result .= $number % 5 == 0 ? 'Plang' : '';
        $result .= $number % 7 == 0 ? 'Plong' : '';

        return $result ?: $number;
    }
}
