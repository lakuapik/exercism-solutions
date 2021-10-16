<?php

namespace App;

/**
 * TODO: complete me.
 *
 * @see https://exercism.org/tracks/php/exercises/acronym
 */
class Acronym
{
    public static function handle(string $text): string
    {
        if (empty(explode(' ', $text)[1])) {
            return '';
        }

        return join(array_map(function ($word) {
            return strtoupper(str_split($word)[0]);
        }, explode(' ', $text)));
    }
}
