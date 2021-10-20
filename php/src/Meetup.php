<?php

namespace App;

use DateTimeImmutable;

/**
 * @see https://exercism.org/tracks/php/exercises/luhn
 */
class Meetup
{
    public static function day(int $year, int $month, string $which, string $weekday): DateTimeImmutable
    {
        throw new \BadFunctionCallException('Implement the day function');
    }
}
