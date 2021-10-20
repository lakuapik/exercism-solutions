<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/pascals-triangle/PascalsTriangleTest.php

use App\PascalsTriangle;

test('ZeroRows', function () {
    expect(PascalsTriangle::rows(0))->toBe([]);
})->skip();

test('SingleRow', function () {
    expect(PascalsTriangle::rows(1))->toBe([[1]]);
})->skip();

test('TwoRows', function () {
    expect(PascalsTriangle::rows(2))->toBe([[1], [1, 1]]);
})->skip();

test('ThreeRows', function () {
    expect(PascalsTriangle::rows(3))->toBe([[1], [1, 1], [1, 2, 1]]);
})->skip();

test('FourRows', function () {
    expect(PascalsTriangle::rows(4))
        ->toBe([[1], [1, 1], [1, 2, 1], [1, 3, 3, 1]]);
})->skip();

test('NegativeRows', function () {
    expect(PascalsTriangle::rows(-1))->toBe(-1);
})->skip();

test('NullNoRows', function () {
    expect(PascalsTriangle::rows(null))->toBe(-1);
})->skip();
