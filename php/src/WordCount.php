<?php

namespace App;

/**
 * @see https://exercism.org/tracks/php/exercises/word-count
 */
class WordCount
{
    public static function handle(string $words): array
    {
        $results = [];

        foreach (preg_split('/[\s\t]/', $words) as $word) {
            $word           = strtolower(preg_replace('/[[:punct:]]/', '', $word));
            $results[$word] = @$results[$word] + 1;
        }

        unset($results['']);

        return $results;
    }
}
