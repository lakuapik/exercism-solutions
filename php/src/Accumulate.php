<?php

namespace App;

/**
 * @see https://exercism.org/tracks/php/exercises/accumulate
 */
class Accumulate
{
    public static function handle(array $input, callable $accumulator): array
    {
        return array_map($accumulator, $input);
    }
}
