<?php

namespace App;

/**
 * @see https://exercism.org/tracks/php/exercises/atbash-cipher
 */
class AtbashCipher
{
    public static function encode(string $text): string
    {
        $encodes           = [];
        $alphabets         = str_split('abcdefghijklmnopqrstuvwxyz');
        $flippedAlphabets  = array_flip($alphabets);
        $reversedAlphabets = array_reverse($alphabets);

        foreach (str_split($text) as $char) {
            if (is_numeric($char)) {
                $encodes[] = $char;
                continue;
            }
            if (!array_key_exists(strtolower($char), $flippedAlphabets)) {
                continue;
            }
            $alphabetIndex = $flippedAlphabets[strtolower($char)];
            $encodes[]     = $reversedAlphabets[$alphabetIndex];
        }

        return join(' ', array_map('join', array_chunk($encodes, 5)));
    }
}
