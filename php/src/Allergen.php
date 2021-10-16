<?php

namespace App;

/**
 * @see https://exercism.org/tracks/php/exercises/allergies
 */
class Allergen
{
    public const EGGS         = 1;
    public const PEANUTS      = 2;
    public const SHELLFISH    = 4;
    public const STRAWBERRIES = 8;
    public const TOMATOES     = 16;
    public const CHOCOLATE    = 32;
    public const POLLEN       = 64;
    public const CATS         = 128;

    public function __construct(
        public int $score
    ) {
    }

    public function getScore(): int
    {
        return $this->score;
    }

    public static function allergenList(): array
    {
        return [
            new self(self::EGGS),
            new self(self::PEANUTS),
            new self(self::SHELLFISH),
            new self(self::STRAWBERRIES),
            new self(self::TOMATOES),
            new self(self::CHOCOLATE),
            new self(self::POLLEN),
            new self(self::CATS),
        ];
    }
}
