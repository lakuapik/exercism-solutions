<?php

namespace App;

/**
 * @see https://exercism.org/tracks/php/exercises/high-scores
 */
class HighScores
{
    public $latest;

    public $personalBest;

    public $personalTopThree;

    public function __construct(
        public array $scores
    ) {
        $this->latest = end($scores);

        $this->personalBest = max($scores);

        rsort($scores, SORT_NUMERIC);

        $this->personalTopThree = array_slice($scores, 0, 3);
    }
}
