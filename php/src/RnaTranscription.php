<?php

namespace App;

/**
 * @see https://exercism.org/tracks/php/exercises/rna-transcription
 */
class RnaTranscription
{
    public static function handle(string $dna): string
    {
        return join(array_map(function ($char) {
            return match (strtoupper($char)) {
                'G'     => 'C',
                'C'     => 'G',
                'T'     => 'A',
                'A'     => 'U',
                default => '',
            };
        }, str_split($dna)));
    }
}
