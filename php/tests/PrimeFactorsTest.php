<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/prime-factors/PrimeFactorsTest.php

namespace Tests;

use App\PrimeFactors;

test('NoFactors', function () {
    expect(PrimeFactors::factors(1))->toBe([]);
})->skip();

test('OneFactor', function () {
    expect(PrimeFactors::factors(2))->toBe([2]);
})->skip();

test('SquareOfPrime', function () {
    expect(PrimeFactors::factors(9))->toBe([3, 3]);
})->skip();

test('CubeOfPrime', function () {
    expect(PrimeFactors::factors(8))->toBe([2, 2, 2]);
})->skip();

test('ProductOfPrimesAndNon', function () {
    expect(PrimeFactors::factors(12))->toBe([2, 2, 3]);
})->skip();

test('ProductOfPrimes', function () {
    expect(PrimeFactors::factors(901255))->toBe([5, 17, 23, 461]);
})->skip();

test('FactorsIncludeLargePrime', function () {
    expect(PrimeFactors::factors(93819012551))->toBe([11, 9539, 894119]);
})->skip();
