<?php

namespace App;

/**
 * @see https://exercism.org/tracks/php/exercises/triangle
 */
class Triangle
{
    public function __construct(
        public int $a,
        public int $b,
        public int $c,
    ) {
    }

    public function kind(): string
    {
        if ($this->a == $this->b
            && $this->a == $this->c
            && $this->b == $this->c) {
            return 'equilateral';
        }
    }
}
