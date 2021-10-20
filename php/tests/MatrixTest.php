<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/luhn/LuhnTest.php

namespace Tests;

use App\Matrix;

test('ExtractRowFromOneNumberMatrix', function () {
    expect(new Matrix('1'))->getRow(1)->toBe([1]);
})->skip();

test('ExtractRow', function () {
    expect(new Matrix('1 2\n3 4'))->getRow(2)->toBe([3, 4]);
})->skip();

test('ExtractRowWhereNumbersHaveDifferentWidths', function () {
    expect(new Matrix('1, 2\n10 20'))->getRow(2)->toBe([10, 20]);
})->skip();

test('ExtractRowFromNonSquareMatrixWithNoMatchingColumn', function () {
    expect(new Matrix('1 2 3\n4 5 6\n7 8 9\n8 7 6'))
        ->getRow(4)->toBe([8, 7, 6]);
})->skip();

test('ExtractColumnFromOneNumberMatrix', function () {
    expect(new Matrix('1'))->getColumn(1)->toBe([1]);
})->skip();

test('ExtractColumn', function () {
    expect(new Matrix('1 2 3\n4 5 6\n7 8 9'))->getColumn(3)->toBe([3, 6, 9]);
})->skip();

test('ExtractColumnFromNonSquareMatrixWithNoMatchRow', function () {
    expect(new Matrix('1 2 3 4\n5 6 7 8\n9 8 7 6'))
        ->getColumn(4)->toBe([4, 8, 6]);
})->skip();

test('ExtractColumnWhenNumbersHaveDifferentWidths', function () {
    expect(new Matrix('89 1903 3\n18 3 1\n9 41 800'))
        ->getColumn(2)->toBe([1903, 3, 41]);
})->skip();
