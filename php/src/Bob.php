<?php

namespace App;

/**
 * @see https://exercism.org/tracks/php/exercises/bob
 */
class Bob
{
    public function respondTo(string $str): string
    {
        $str = trim($str);

        $isEmpty = $str == '';

        $onlyNums = preg_grep('/[a-zA-Z]/', str_split($str)) == [];

        $noChars = preg_grep('/[a-zA-Z\?]/', str_split($str)) == [];

        $haveQuestion = @str_split($str)[strlen($str) - 1] == '?';

        $chars     = array_filter(str_split($str), fn ($c) => !is_numeric($c));
        $capChars  = array_map(fn ($c) => strtoupper($c) == $c, $chars);
        $isAllCaps = !is_numeric(array_search(false, $capChars));

        return match (true) {
            $isEmpty                    => 'Fine. Be that way!',
            $onlyNums && $haveQuestion  => 'Sure.',
            $noChars                    => 'Whatever.',
            $haveQuestion && $isAllCaps => 'Calm down, I know what I\'m doing!',
            $haveQuestion               => 'Sure.',
            $isAllCaps                  => 'Whoa, chill out!',
            default                     => 'Whatever.',
        };
    }
}
