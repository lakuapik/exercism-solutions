<?php

// https://github.com/exercism/php/blob/7e2a5b39e73f62c1c6fa08d04b46ce7c705eaa34/exercises/practice/hamming/HammingTest.php

namespace Tests;

use App\Hamming;
use InvalidArgumentException;

test('no difference between identical strands', function () {
    expect(Hamming::handle('A', 'A'))->toBe(0);
});

test('complete hamming distance of for single nucleotide strand', function () {
    expect(Hamming::handle('A', 'G'))->toBe(1);
});

test('complete hamming distance For small strand', function () {
    expect(Hamming::handle('AG', 'CT'))->toBe(2);
});

test('small hamming distance', function () {
    expect(Hamming::handle('AT', 'CT'))->toBe(1);
});

test('small hamming distance in longer strand', function () {
    expect(Hamming::handle('GGACG', 'GGTCG'))->toBe(1);
});

test('large hamming distance', function () {
    expect(Hamming::handle('GATACA', 'GCATAA'))->toBe(4);
});

test('hamming distance in very long strand', function () {
    expect(Hamming::handle('GGACGGATTCTG', 'AGGACGGATTCT'))->toBe(9);
});

test('ExceptionThrownWhenStrandsAreDifferentLength', function () {
    Hamming::handle('GGACG', 'AGGACGTGG');
})->throws(InvalidArgumentException::class, 'DNA strands must be of equal length.');
