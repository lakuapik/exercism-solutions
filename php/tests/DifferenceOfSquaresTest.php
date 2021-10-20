<?php

// https://github.com/exercism/php/blob/7e2a5b39e73f62c1c6fa08d04b46ce7c705eaa34/exercises/practice/difference-of-squares/DifferenceOfSquaresTest.php

namespace Tests;

use App\DifferenceOfSquares;

test('SquareOfSumTo5', function () {
    expect(DifferenceOfSquares::squareOfSum(5))->toBe(225);
})->skip();

test('SumOfSquaresTo5', function () {
    expect(DifferenceOfSquares::sumOfSquares(5))->toBe(55);
})->skip();

test('DifferenceOfSumTo5', function () {
    expect(DifferenceOfSquares::difference(5))->toBe(170);
})->skip();

test('SquareOfSumTo10', function () {
    expect(DifferenceOfSquares::squareOfSum(10))->toBe(3025);
})->skip();

test('SumOfSquaresTo10', function () {
    expect(DifferenceOfSquares::sumOfSquares(10))->toBe(385);
})->skip();

test('DifferenceOfSumTo10', function () {
    expect(DifferenceOfSquares::difference(10))->toBe(2640);
})->skip();

test('SquareOfSumTo100', function () {
    expect(DifferenceOfSquares::squareOfSum(100))->toBe(25502500);
})->skip();

test('SumOfSquaresTo100', function () {
    expect(DifferenceOfSquares::sumOfSquares(100))->toBe(338350);
})->skip();

test('DifferenceOfSumTo100', function () {
    expect(DifferenceOfSquares::difference(100))->toBe(25164150);
})->skip();
