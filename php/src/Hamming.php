<?php

namespace App;

use InvalidArgumentException;

/**
 * @link https://exercism.org/tracks/php/exercises/hamming
 */
class Hamming
{
    public static function handle(string $strandA, string $strandB): int
    {
        if (strlen($strandA) != strlen($strandB)) {
            throw new InvalidArgumentException('DNA strands must be of equal length.');
        }

        $hamming = 0;

        foreach (str_split($strandA) as $i => $char) {
            $hamming += str_split($strandB)[$i] == $char ? 0 : 1;
        }

        return $hamming;
    }
}
