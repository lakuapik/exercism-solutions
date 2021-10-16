<?php

namespace App;

use DateInterval;
use DateTimeImmutable;

/**
 * @see https://exercism.org/tracks/php/exercises/gigasecond
 */
class GigaSecond
{
    public static function handle(DateTimeImmutable $date): DateTimeImmutable
    {
        return $date->add(new DateInterval('PT1000000000S'));
    }
}
