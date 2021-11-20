<?php

namespace App;

/**
 * @see https://exercism.org/tracks/php/exercises/space-age
 */
class SpaceAge
{
    public function __construct(
        protected int $seconds
    ) {
    }

    public function seconds(): int
    {
        return $this->seconds;
    }

    public function earth(): float
    {
        return $this->seconds() / 31_557_600;
    }

    public function mercury(): float
    {
        return $this->earth() / 0.2408467;
    }

    public function venus(): float
    {
        return $this->earth() / 0.61519726;
    }

    public function mars(): float
    {
        return $this->earth() / 1.8808158;
    }

    public function jupiter(): float
    {
        return $this->earth() / 11.862615;
    }

    public function saturn(): float
    {
        return $this->earth() / 29.447498;
    }

    public function uranus(): float
    {
        return $this->earth() / 84.016846;
    }

    public function neptune(): float
    {
        return $this->earth() / 164.79132;
    }
}
