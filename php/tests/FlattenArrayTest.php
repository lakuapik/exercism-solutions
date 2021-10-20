<?php

// https://github.com/exercism/php/blob/7e2a5b39e73f62c1c6fa08d04b46ce7c705eaa34/exercises/practice/flatten-array/FlattenArrayTest.php

namespace Tests;

use App\FlattenArray;

test('WithOutNesting', function () {
    expect(FlattenArray::flatten([0, 1, 2]))->toBe([0, 1, 2]);
})->skip();

test('ArrayWithJustIntegersPresent', function () {
    expect(FlattenArray::flatten([1, [2, 3, 4, 5, 6, 7], 8]))
        ->toBe([1, 2, 3, 4, 5, 6, 7, 8]);
})->skip();

test('FiveLevelNesting', function () {
    expect(FlattenArray::flatten([0, 2, [[2, 3], 8, 100, 4, [[[50]]]], -2]))
        ->toBe([0, 2, 2, 3, 8, 100, 4, 50, -2]);
})->skip();

test('SixLevelNesting', function () {
    expect(FlattenArray::flatten([1, [2, [[3]], [4, [[5]]], 6, 7], 8]))
        ->toBe([1, 2, 3, 4, 5, 6, 7, 8]);
})->skip();

test('SixLevelNestListWithNullValues', function () {
    expect(FlattenArray::flatten([
        0, 2, [[2, 3], 8, [[100]], null, [[null]]], -2,
    ]))->toBe([0, 2, 2, 3, 8, 100, -2]);
})->skip();

test('AllValuesInNestedListAreNull', function () {
    expect(FlattenArray::flatten([
        null, [[[null]]], null, null, [[null, null], null], null,
    ]))->toBe([]);
})->skip();
