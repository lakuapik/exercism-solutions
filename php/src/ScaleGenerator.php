<?php

namespace App;

/**
 * I dont understand musical steps,
 * I build this based on test pattern.
 *
 * @see https://exercism.org/tracks/php/exercises/scale-generator
 */
class ScaleGenerator
{
    public const SHARP_NOTES = [
        'A', 'A#', 'B', 'C', 'C#', 'D',
        'D#', 'E', 'F', 'F#', 'G', 'G#',
    ];

    public const FLAT_NOTES = [
        'A', 'Bb', 'B', 'C', 'Db', 'D',
        'Eb', 'E', 'F', 'Gb', 'G', 'Ab',
    ];

    public $name;

    public $pitches;

    public function __construct(
        public string $tonic,
        public string $scaleName,
        public string $pattern = ''
    ) {
        $this->name = join(' ', [strtoupper($tonic), strtolower($scaleName)]);
    }
}
