<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/nucleotide-count/NucleotideCountTest.php

namespace Tests;

use App\NucleotideCount;

test('EmptyDNASequence', function () {
    expect(NucleotideCount::handle(''))->toBe([
        'a' => 0,
        'c' => 0,
        't' => 0,
        'g' => 0,
    ]);
})->skip();

test('RepetitiveDNASequence', function () {
    expect(NucleotideCount::handle('AAAAAAAAA'))->toBe([
        'a' => 9,
        'c' => 0,
        't' => 0,
        'g' => 0,
    ]);
})->skip();

test('DNASequence', function () {
    expect(NucleotideCount::handle('
        AGCTTTTCATTCTGACTGCAACGGGCAATATGTCTCTGTGTGGATTAAAAAAAGAGTGTCTGATAGCAGC
    '))->toBe([
        'a' => 20,
        'c' => 12,
        't' => 21,
        'g' => 17,
    ]);
})->skip();
