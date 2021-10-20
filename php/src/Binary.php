<?php

namespace App;

use InvalidArgumentException;

/**
 * @see https://exercism.org/tracks/php/exercises/binary
 */
class Binary
{
    public static function parse(string $binary): int
    {
        $result = 0;

        foreach (array_reverse(str_split($binary)) as $i => $digit) {
            if ($digit != '0' && $digit != '1') {
                throw new InvalidArgumentException();
            }
            $result += $digit * pow(2, $i);
        }

        return $result;
    }
}
