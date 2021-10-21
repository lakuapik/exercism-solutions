<?php

namespace App;

use InvalidArgumentException;

/**
 * @see https://exercism.org/tracks/php/exercises/phone-number
 */
class PhoneNumber
{
    public $number;

    public function __construct(string $number)
    {
        $hasPunct  = preg_grep('/[[:punct:]]/', str_split($number)) != [];
        $hasLetter = preg_grep('/[a-zA-Z]/', str_split($number)) != [];

        $clean = join(preg_grep('/[\d]/', str_split($number)));

        if ($hasLetter) {
            throw new InvalidArgumentException('letters not permitted');
        }

        if (strlen($clean) > 11) {
            throw new InvalidArgumentException('more than 11 digits');
        }

        if (strlen($clean) == 11 && str_split($clean)[0] != '1') {
            throw new InvalidArgumentException('11 digits must start with 1');
        }

        if (strlen($clean) == 11) {
            $clean = substr($clean, 1);
        }

        if (strlen($clean) != 10 && $hasPunct) {
            throw new InvalidArgumentException('punctuations not permitted');
        }

        if (strlen($clean) <= 9) {
            throw new InvalidArgumentException('incorrect number of digits');
        }

        if (str_split($clean)[0] == '0') {
            throw new InvalidArgumentException('area code cannot start with zero');
        }

        if (str_split($clean)[0] == '1') {
            throw new InvalidArgumentException('area code cannot start with one');
        }

        if (str_split($clean)[3] == '0') {
            throw new InvalidArgumentException('exchange code cannot start with zero');
        }

        if (str_split($clean)[3] == '1') {
            throw new InvalidArgumentException('exchange code cannot start with one');
        }

        $this->number = $clean;
    }

    public function number(): string
    {
        return $this->number;
    }
}
