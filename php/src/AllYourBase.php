<?php

namespace App;

/**
 * TODO: complete me.
 *
 * @see https://exercism.org/tracks/php/exercises/all-your-base
 */
class AllYourBase
{
    public static function handle(int $fromBase, array $sequence, int $toBase)
    {
        $result = 0;

        foreach (array_reverse($sequence) as $i => $d) {
            $result += $d * pow($fromBase, $i);
        }

        return array_map('intval', str_split($result));
    }
}
