<?php

namespace App;

/**
 * @see https://exercism.org/tracks/php/exercises/beer-song
 */
class BeerSong
{
    public function verse(int $number): string
    {
        return $this->verseAt($number);
    }

    public function verses(int $start, int $finish): string
    {
        for ($i=$start; $i >= $finish; $i--) {
            $lyrics[] = $this->verseAt($i);
        }

        return join("\n", $lyrics);
    }

    public function lyrics(): string
    {
        for ($i=99; $i >= 0; $i--) {
            $lyrics[] = $this->verseAt($i);
        }

        return join($lyrics);
    }

    public function firstLine($bottle = 0): string
    {
        $nm = $bottle == 0 ? 'no more' : $bottle;
        $bt = $bottle != 1 ? 'bottles' : 'bottle';

        return ucfirst("{$nm} {$bt} of beer on the wall, {$nm} {$bt} of beer.\n");
    }

    public function secondLine($bottle = 0): string
    {
        if ($bottle == 0) {
            return 'Go to the store and buy some more, 99 bottles of beer on the wall.';
        }

        $take = $bottle == 1 ? 'Take it' : 'Take one';
        $nm   = $bottle == 1 ? 'no more' : $bottle - 1;
        $bt   = $bottle != 2 ? 'bottles' : 'bottle';

        return ucfirst("{$take} down and pass it around, {$nm} {$bt} of beer on the wall.\n");
    }

    public function verseAt($bottle): string
    {
        return $this->firstLine($bottle) . $this->secondLine($bottle);
    }
}
