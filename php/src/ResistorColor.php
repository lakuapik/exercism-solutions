<?php

namespace App;

/**
 * @see https://exercism.org/tracks/php/exercises/resistor-color
 */
class ResistorColor
{
    public const COLORS = [
        'black', 'brown', 'red', 'orange', 'yellow',
        'green', 'blue', 'violet', 'grey', 'white',
    ];

    public static function handle(string $color): int
    {
        // i would use match if the tests does not check const COLORS
        return array_search($color, self::COLORS);
    }
}
