<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/series/SeriesTest.php

namespace Tests;

use App\Series;
use Exception;

test('SlicesOfOne', function () {
    expect(Series::slices('01234', 1))->toBe(['0', '1', '2', '3', '4']);
})->skip();

test('SlicesOfTwo', function () {
    expect(Series::slices('97867564', 2))->toBe([
        '97', '78', '86', '67', '75', '56', '64',
    ]);
})->skip();

test('SlicesOfThree', function () {
    expect(Series::slices('97867564', 3))->toBe([
        '978', '786', '867', '675', '756', '564',
    ]);
})->skip();

test('SlicesOfFour', function () {
    expect(Series::slices('01234', 4))->toBe(['0123', '1234']);
})->skip();

test('SlicesOfFive', function () {
    expect(Series::slices('01234', 5))->toBe(['01234']);
})->skip();

test('OverlyLongSlice', function () {
    $this->expectException(Exception::class);

    Series::slices('012', 4);
})->skip();

test('OverlyShortSlice', function () {
    $this->expectException(Exception::class);

    Series::slices('01234', 0);
})->skip();
