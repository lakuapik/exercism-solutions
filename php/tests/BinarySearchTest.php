<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/binary-search/BinarySearchTest.php

namespace Tests;

use App\BinarySearch;

test('ItWorksWithOneElement', function () {
    expect(BinarySearch::find(6, [6]))->toBe(0);
})->skip();

test('ItFindsValueInMiddle', function () {
    expect(BinarySearch::find(6, [1, 3, 4, 6, 8, 9, 11]))->toBe(3);
})->skip();

test('ItFindsValueInBeginning', function () {
    expect(BinarySearch::find(1, [1, 3, 4, 6, 8, 9, 11]))->toBe(0);
})->skip();

test('ItFindsValueAtEnd', function () {
    expect(BinarySearch::find(11, [1, 3, 4, 6, 8, 9, 11]))->toBe(6);
})->skip();

test('ItFindsValueInOddLengthArray', function () {
    expect(BinarySearch::find(144, [
        1, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377, 634,
    ]))->toBe(9);
})->skip();

test('ItFindsValueInEvenLengthArray', function () {
    expect(BinarySearch::find(21, [
        1, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377,
    ]))->toBe(5);
})->skip();
test('LowerThanLowestValueNotIn', function () {
    expect(BinarySearch::find(0, [1, 3, 4, 6, 8, 9, 11]))->toBe(-1);
})->skip();

test('LargerThanLargestValueNotIn', function () {
    expect(BinarySearch::find(13, [1, 3, 4, 6, 8, 9, 11]))->toBe(-1);
})->skip();

test('NothingInEmptyArray', function () {
    expect(BinarySearch::find(1, []))->toBe(-1);
})->skip();
