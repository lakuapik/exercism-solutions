<?php

namespace App;

/**
 * @see https://exercism.org/tracks/php/exercises/trinary
 */
class Trinary
{
    public static function handle(string $number): int
    {
        $result = 0;

        if (preg_grep('/[3-9a-zA-Z]/', str_split($number))) {
            return $result;
        }

        foreach (array_reverse(str_split($number)) as $i => $d) {
            $result += $d * pow(3, $i);
        }

        return $result;
    }
}
