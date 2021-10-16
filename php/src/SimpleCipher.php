<?php

namespace App;

use InvalidArgumentException;

/**
 * @see https://exercism.org/tracks/php/exercises/simple-cipher
 */
class SimpleCipher
{
    public const LOWER_BOUNDARY = 97; // lowercase a
    public const UPPER_BOUNDARY = 122; // lowercase z

    public function __construct(string $key = null)
    {
        if ($key === '' || preg_match('/[0-9A-Z]/', $key)) {
            throw new InvalidArgumentException();
        }

        $this->key = $key ?: $this->generateRandomKey();
    }

    public function generateRandomChar(): string
    {
        return chr(rand(self::LOWER_BOUNDARY, self::UPPER_BOUNDARY));
    }

    public function generateRandomKey(): string
    {
        return join(array_map('self::generateRandomChar', range(1, 100)));
    }

    public function encode(string $plainText): string
    {
        $results = [];

        foreach (str_split($plainText) as $i => $char) {
            $length    = ord(str_split($this->key)[$i]) - self::LOWER_BOUNDARY;
            $shifto    = ord($char) + $length;
            $results[] = $shifto > self::UPPER_BOUNDARY
                ? chr($shifto - self::UPPER_BOUNDARY + self::LOWER_BOUNDARY - 1)
                : chr($shifto);
        }

        return join($results);
    }

    public function decode(string $cipherText): string
    {
        $results = [];

        foreach (str_split($cipherText) as $i => $char) {
            $length    = ord(str_split($this->key)[$i]) - self::LOWER_BOUNDARY;
            $shifto    = ord($char) - $length;
            $results[] = $shifto < self::LOWER_BOUNDARY
                ? chr($shifto + self::UPPER_BOUNDARY - self::LOWER_BOUNDARY + 1)
                : chr($shifto);
        }

        return join($results);
    }
}
