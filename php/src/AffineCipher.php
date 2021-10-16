<?php

namespace App;

use Exception;

/**
 * @see https://exercism.org/tracks/php/exercises/affine-cipher
 */
class AffineCipher
{
    public const ALPHABETS = [
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
        'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
    ];

    public static function validateCoprime($num1): void
    {
        if (!($num1 % 2 && $num1 % 13)) {
            throw new Exception('Error: a and m must be coprime.', 1);
        }
    }

    public static function getTexts(string $text): array
    {
        $texts = preg_grep('/[\w\d]/', str_split($text));

        return array_map('strtolower', $texts);
    }

    public static function encodeChar(string $char, int $num1, int $num2)
    {
        $index = array_search(strtolower($char), self::ALPHABETS);

        if ($index === false) {
            return $char;
        }

        $toIndex = ($num1 * $index + $num2) % count(self::ALPHABETS);

        return self::ALPHABETS[$toIndex];
    }

    public static function encode(string $text, int $num1, int $num2): string
    {
        self::validateCoprime($num1);

        $encodes = array_map(
            fn ($char) => self::encodeChar($char, $num1, $num2),
            self::getTexts($text)
        );

        return join(' ', array_map('join', array_chunk($encodes, 5)));
    }

    public static function decodeChar(string $char, int $num1, int $num2)
    {
        self::validateCoprime($num1);

        $index = array_search(strtolower($char), self::ALPHABETS);

        if ($index === false) {
            return $char;
        }

        $num1Inverse     = 0;
        $alphabetsLength = count(self::ALPHABETS);

        while (($num1 * $num1Inverse % $alphabetsLength) != 1) {
            $num1Inverse++;
        }

        $toIndex = $num1Inverse * ($index - $num2) % $alphabetsLength;
        $toIndex = $toIndex < 0 ? $toIndex + $alphabetsLength : $toIndex;

        return self::ALPHABETS[$toIndex];
    }

    public static function decode(string $text, int $num1, int $num2): string
    {
        $decodes = array_map(
            fn ($char) => self::decodeChar($char, $num1, $num2),
            self::getTexts($text)
        );

        return join($decodes);
    }
}
