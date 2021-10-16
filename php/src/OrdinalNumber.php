<?php

namespace App;

/**
 * @see https://exercism.org/tracks/php/exercises/ordinal-number
 */
class OrdinalNumber
{
    public static function handle(int $number): string
    {
        if ($number === 0) {
            return '0';
        }

        if ($number >= 11 && $number <= 20) {
            return "{$number}th";
        }

        $numbers = str_split($number);

        $ordinal = match (end($numbers)) {
            '3'     => 'rd',
            '2'     => 'nd',
            '1'     => 'st',
            default => 'th',
        };

        return $number . $ordinal;
    }
}
