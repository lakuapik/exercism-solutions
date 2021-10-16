<?php

namespace App;

/**
 * @see https://exercism.org/tracks/php/exercises/anagram
 */
class Anagram
{
    public static function handle(string $word, array $anagrams): array
    {
        $anagrams = array_filter($anagrams, function ($anagram) use ($word) {
            return strtolower($anagram) != strtolower($word);
        });

        $identicals = array_intersect($anagrams, [$word]);
        $anagrams   = array_diff($anagrams, $identicals);

        $words = str_split($word);
        natcasesort($words);
        $word = join($words);

        $anagrams = array_combine($anagrams, array_map(function ($anagram) {
            $words = str_split($anagram);
            natcasesort($words);

            return join($words);
        }, $anagrams));

        $matches = array_filter($anagrams, function ($anagram) use ($word) {
            return strtolower($anagram) == strtolower($word);
        });

        return array_keys($matches);
    }
}
