<?php

namespace App;

/**
 * @see https://exercism.org/tracks/php/exercises/change
 */
class Change
{
    public static function findFewestCoins(array $coins, int $amount): array
    {
        rsort($coins, SORT_NUMERIC);

        while ($amount > 0) {
            foreach ($coins as $coin) {
                if ($amount < $coin) {
                    continue;
                }
                $result[] = $coin;
                $amount -= $coin;
                break;
            }
        }

        sort($result, SORT_NUMERIC);

        return $result;
    }
}
