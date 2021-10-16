<?php

namespace Tests;

use App\ScaleGenerator;

// use function PHPUnit\Framework\assertEquals;

test('NamingScale')
    ->expect(new ScaleGenerator('c', 'chromatic'))
    ->name->toBe('C chromatic');

test('ChromaticScale')->skip()
    ->expect(new ScaleGenerator('C', 'chromatic'))
    ->pitches->toBe([
        'C', 'C#', 'D', 'D#', 'E', 'F',
        'F#', 'G', 'G#', 'A', 'A#', 'B',
    ]);

test('AnotherChromaticScale')->skip()
    ->expect(new ScaleGenerator('F', 'chromatic'))
    ->pitches->toBe([
        'F', 'Gb', 'G', 'Ab', 'A', 'Bb',
        'B', 'C', 'Db', 'D', 'Eb', 'E',
    ]);

// test('NamingMajorScale', function () {
//     $major = new ScaleGenerator('G', 'major', 'MMmMMMm');
//     $expected = 'G major';
//     $actual = $major->name;
//     assertEquals($expected, $actual);
// });

// test('MajorScale', function () {
//     $major = new ScaleGenerator('C', 'major', 'MMmMMMm');
//     $expected = ['C', 'D', 'E', 'F', 'G', 'A', 'B'];
//     $actual = $major->pitches;
//     assertEquals($expected, $actual);
// });

// test('AnotherMajorScale', function () {
//     $major = new ScaleGenerator('G', 'major', 'MMmMMMm');
//     $expected = ['G', 'A', 'B', 'C', 'D', 'E', 'F#'];
//     $actual = $major->pitches;
//     assertEquals($expected, $actual);
// });

// test('MinorScale', function () {
//     $minor = new ScaleGenerator('f#', 'minor', 'MmMMmMM');
//     $expected = ['F#', 'G#', 'A', 'B', 'C#', 'D', 'E'];
//     $actual = $minor->pitches;
//     assertEquals($expected, $actual);
// });

// test('AnotherMinorScale', function () {
//     $minor = new ScaleGenerator('bb', 'minor', 'MmMMmMM');
//     $expected = ['Bb', 'C', 'Db', 'Eb', 'F', 'Gb', 'Ab'];
//     $actual = $minor->pitches;
//     assertEquals($expected, $actual);
// });

// test('DorianMode', function () {
//     $dorian = new ScaleGenerator('d', 'dorian', 'MmMMMmM');
//     $expected = ['D', 'E', 'F', 'G', 'A', 'B', 'C'];
//     $actual = $dorian->pitches;
//     assertEquals($expected, $actual);
// });

// test('MixolydianMode', function () {
//     $mixolydian = new ScaleGenerator('Eb', 'mixolydian', 'MMmMMmM');
//     $expected = ['Eb', 'F', 'G', 'Ab', 'Bb', 'C', 'Db'];
//     $actual = $mixolydian->pitches;
//     assertEquals($expected, $actual);
// });

// test('LydianMode', function () {
//     $lydian = new ScaleGenerator('a', 'lydian', 'MMMmMMm');
//     $expected = ['A', 'B', 'C#', 'D#', 'E', 'F#', 'G#'];
//     $actual = $lydian->pitches;
//     assertEquals($expected, $actual);
// });

// test('PhrygianMode', function () {
//     $phrygian = new ScaleGenerator('e', 'phrygian', 'mMMMmMM');
//     $expected = ['E', 'F', 'G', 'A', 'B', 'C', 'D'];
//     $actual = $phrygian->pitches;
//     assertEquals($expected, $actual);
// });

// test('LocrianMode', function () {
//     $locrian = new ScaleGenerator('g', 'locrian', 'mMMmMMM');
//     $expected = ['G', 'Ab', 'Bb', 'C', 'Db', 'Eb', 'F'];
//     $actual = $locrian->pitches;
//     assertEquals($expected, $actual);
// });

// test('HarmonicMinor', function () {
//     $harmonicMinor = new ScaleGenerator('d', 'harmonic_minor', 'MmMMmAm');
//     $expected = ['D', 'E', 'F', 'G', 'A', 'Bb', 'Db'];
//     $actual = $harmonicMinor->pitches;
//     assertEquals($expected, $actual);
// });

// test('Octatonic', function () {
//     $octatonic = new ScaleGenerator('C', 'octatonic', 'MmMmMmMm');
//     $expected = ['C', 'D', 'D#', 'F', 'F#', 'G#', 'A', 'B'];
//     $actual = $octatonic->pitches;
//     assertEquals($expected, $actual);
// });

// test('Hexatonic', function () {
//     $hexatonic = new ScaleGenerator('Db', 'hexatonic', 'MMMMMM');
//     $expected = ['Db', 'Eb', 'F', 'G', 'A', 'B'];
//     $actual = $hexatonic->pitches;
//     assertEquals($expected, $actual);
// });

// test('Pentatonic', function () {
//     $pentatonic = new ScaleGenerator('A', 'pentatonic', 'MMAMA');
//     $expected = ['A', 'B', 'C#', 'E', 'F#'];
//     $actual = $pentatonic->pitches;
//     assertEquals($expected, $actual);
// });

// test('Enigmatic', function () {
//     $enigmatic = new ScaleGenerator('G', 'enigma', 'mAMMMmM');
//     $expected = ['G', 'G#', 'B', 'C#', 'D#', 'F', 'F#'];
//     $actual = $enigmatic->pitches;
//     assertEquals($expected, $actual);
// });
