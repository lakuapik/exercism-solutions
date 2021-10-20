<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/sum-of-multiples/SumOfMultiplesTest.php

namespace Tests;

use App\SumOfMultiplies;

test('SumToOne', function () {
    expect(SumOfMultiplies::handle(1, [3, 5]))->toBe(0);
})->skip();

test('SumToThree', function () {
    expect(SumOfMultiplies::handle(4, [3, 5]))->toBe(3);
})->skip();

test('SumToTen', function () {
    expect(SumOfMultiplies::handle(10, [3, 5]))->toBe(23);
})->skip();

test('SumToTwenty', function () {
    expect(SumOfMultiplies::handle(20, [3, 5]))->toBe(78);
})->skip();

test('SumToHundred', function () {
    expect(SumOfMultiplies::handle(100, [3, 5]))->toBe(2318);
})->skip();

test('SumToThousand', function () {
    expect(SumOfMultiplies::handle(1000, [3, 5]))->toBe(233168);
})->skip();

test('ConfigureToTwenty', function () {
    expect(SumOfMultiplies::handle(20, [7, 13, 17]))->toBe(51);
})->skip();

test('ConfigureToFifteen', function () {
    expect(SumOfMultiplies::handle(15, [4, 6]))->toBe(30);
})->skip();

test('ConfigureToOneFifty', function () {
    expect(SumOfMultiplies::handle(150, [5, 6, 8]))->toBe(4419);
})->skip();

test('ConfigureToFortySeven', function () {
    expect(SumOfMultiplies::handle(10000, [43, 47]))->toBe(2203160);
})->skip();

test('MultiplesOfOneToHundred', function () {
    expect(SumOfMultiplies::handle(100, [1]))->toBe(4950);
})->skip();

test('MultiplesOfEmptyList', function () {
    expect(SumOfMultiplies::handle(1000, [0]))->toBe(0);
})->skip();
