<?php

namespace App;

/**
 * @see https://exercism.org/tracks/php/exercises/allergies
 */
class Allergies
{
    public function __construct(
        public int $score
    ) {
        $this->score = $score % 256;
    }

    public function isAllergicTo(Allergen $allergen): bool
    {
        return in_array($allergen, $this->getList());
    }

    public function getList(): array
    {
        $allergiesTo  = [];
        $allergens    = array_reverse(Allergen::allergenList());
        $currentScore = $this->score;

        foreach ($allergens as $allergen) {
            if ($allergen->score > $currentScore) {
                continue;
            }
            $currentScore -= $allergen->score;
            $allergiesTo[] = $allergen;
        }

        return $allergiesTo;
    }
}
