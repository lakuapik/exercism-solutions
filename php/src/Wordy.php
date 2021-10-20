<?php

namespace App;

use InvalidArgumentException;

/**
 * @see https://exercism.org/tracks/php/exercises/wordy
 */
class Wordy
{
    public static function handle(string $input): int
    {
        $input   = str_replace('?', '', $input);
        $numbers = preg_grep('/\b(\d+)\b/', explode(' ', $input));

        if (count($numbers) <= 1) {
            throw new InvalidArgumentException();
        }

        $pattern = '/\b(\d+|plus|minus|multiplied|divided)\b/';
        $maths   = array_values(preg_grep($pattern, explode(' ', $input)));
        $result  = $maths[0];

        for ($i=1; $i < count($maths); $i += 2) {
            $fn = match ($maths[$i]) {
                'plus'       => fn () => $result + $maths[$i + 1],
                'minus'      => fn () => $result - $maths[$i + 1],
                'divided'    => fn () => $result / $maths[$i + 1],
                'multiplied' => fn () => $result * $maths[$i + 1],
                default      => fn () => $result + 0,
            };
            $result = $fn();
        }

        return $result;
    }
}
