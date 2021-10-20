<?php

namespace App;

/**
 * @see https://exercism.org/tracks/php/exercises/two-fer
 */
class TwoFer
{
    public static function handle(string $name = 'you'): string
    {
        return "One for {$name}, one for me.";
    }
}
