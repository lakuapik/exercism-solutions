<?php

namespace App;

/**
 * @see https://exercism.org/tracks/php/exercises/acronym
 */
class Acronym
{
    public static function handle(string $text): string
    {
        if (empty(explode(' ', $text)[1])) {
            return '';
        }

        $results = [];
        $chars   = str_split($text);

        for ($i=0; $i < count($chars); $i++) {
            $char  = $chars[$i];
            $charB = @$chars[$i - 1];
            if ((strtoupper($char) == $char && $charB != strtoupper($charB))
                || in_array($charB, [null, ' ', '-'])) {
                $results[] = strtoupper($char);
            }
        }

        return join(array_filter($results, function ($el) {
            return !in_array($el, [null, ' ', '-']);
        }));
    }
}
