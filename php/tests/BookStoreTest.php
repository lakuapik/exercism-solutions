<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/book-store/BookStoreTest.php

namespace Tests;

use App\BookStore;

test('SingleBook', function () {
    expect(BookStore::total([1]))->toBe(8.0);
})->skip();

test('TwoSame', function () {
    expect(BookStore::total([2, 2]))->toBe(16.0);
})->skip();

test('Empty', function () {
    expect(BookStore::total([]))->toBe(0.0);
})->skip();

test('TwoDifferent', function () {
    expect(BookStore::total([1, 2]))->toBe(15.2);
})->skip();

test('ThreeDifferent', function () {
    expect(BookStore::total([1, 2, 3]))->toBe(21.60);
})->skip();

test('FourDifferent', function () {
    expect(BookStore::total([1, 2, 3, 4]))->toBe(25.60);
})->skip();

test('FiveDifferent', function () {
    expect(BookStore::total([1, 2, 3, 4, 5]))->toBe(30.00);
})->skip();

test('Eight', function () {
    expect(BookStore::total([1, 1, 2, 2, 3, 3, 4, 5]))->toBe(51.20);
})->skip();

test('FourPairsPlusOne', function () {
    expect(BookStore::total([1, 1, 2, 2, 3, 3, 4, 4, 5]))->toBe(55.60);
})->skip();

test('FivePairs', function () {
    expect(BookStore::total([1, 1, 2, 2, 3, 3, 4, 4, 5, 5]))->toBe(60.00);
})->skip();

test('FivePairsPlusOne', function () {
    expect(BookStore::total([1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 1]))->toBe(68.00);
})->skip();

test('Twelve', function () {
    expect(BookStore::total([1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 1, 2]))->toBe(75.20);
})->skip();
