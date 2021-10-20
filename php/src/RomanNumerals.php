<?php

namespace App;

/**
 * @see https://exercism.org/tracks/php/exercises/roman-numerals
 */
class RomanNumerals
{
    /**
     * Copied from my php package lakuapik/php-helper-id.
     *
     * @see https://github.com/lakuapik/php-helper-id/blob/master/src/PHPHelperId/romawi.php
     */
    public static function toRoman(int $number): string
    {
        $results = '';

        $numerals = [
            'M'  => 1000,
            'CM' => 900,
            'D'  => 500,
            'CD' => 400,
            'C'  => 100,
            'XC' => 90,
            'L'  => 50,
            'XL' => 40,
            'X'  => 10,
            'IX' => 9,
            'V'  => 5,
            'IV' => 4,
            'I'  => 1,
        ];

        foreach ($numerals as $numeral => $value) {
            $realVal = intval($number / $value);
            $results .= str_repeat($numeral, $realVal);
            $number = $number % $value;
        }

        return $results;
    }
}
