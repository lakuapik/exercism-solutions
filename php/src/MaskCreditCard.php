<?php

namespace App;

/**
 * @see https://exercism.org/tracks/php/exercises/mask-credit-card
 */
class MaskCreditCard
{
    public static function handle(string $cc): string
    {
        if ($cc === '' || strlen($cc) < 6) {
            return $cc;
        }

        $result    = '';
        $numbs     = array_filter(str_split($cc), 'is_numeric');
        $keepNumbs = array_slice($numbs, 0, 1, true)
            + array_slice($numbs, count($numbs) - 4, count($numbs), true);

        foreach (str_split($cc) as $i => $char) {
            $result .= (is_numeric($char) && !array_key_exists($i, $keepNumbs))
                ? '#' : $char;
        }

        return $result;
    }
}
