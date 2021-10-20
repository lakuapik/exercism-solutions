<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/nth-prime/NthPrimeTest.php

namespace Tests;

use App\NthPrime;

test('FirstPrime', function () {
    expect(NthPrime::handle(1))->toBe(2);
})->skip();

test('SecondPrime', function () {
    expect(NthPrime::handle(2))->toBe(3);
})->skip();

test('SixthPrime', function () {
    expect(NthPrime::handle(6))->toBe(13);
})->skip();

test('BigPrime', function () {
    expect(NthPrime::handle(10001))->toBe(104743);
})->skip();

test('ZeroPrime', function () {
    expect(NthPrime::handle(0))->toBe(false);
})->skip();
