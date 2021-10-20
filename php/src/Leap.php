<?php

namespace App;

/**
 * @see https://exercism.org/tracks/php/exercises/leap
 */
class Leap
{
    public static function handle(int $year): bool
    {
        return $year % 400 == 0 || ($year % 100 != 0 && $year % 4 == 0);
    }
}
