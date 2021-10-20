<?php

namespace App;

/**
 * @see https://exercism.org/tracks/php/exercises/beer-song
 */
class BeerSong
{
    public function verse(int $number): string
    {
        throw new \BadMethodCallException('Implement the verse method');
    }

    public function verses(int $start, int $finish): string
    {
        throw new \BadMethodCallException('Implement the verses method');
    }

    public function lyrics(): string
    {
        throw new \BadMethodCallException('Implement the lyrics method');
    }
}
