<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/change/ChangeTest.php

namespace Tests;

use App\Change;

test('SingleCoinChange', function () {
    expect(Change::findFewestCoins([1, 5, 10, 25, 100], 25))->toBe([25]);
})->skip();

test('Change', function () {
    expect(Change::findFewestCoins([1, 5, 10, 25, 100], 15))->toBe([5, 10]);
})->skip();

test('ChangeWithLilliputianCoins', function () {
    expect(Change::findFewestCoins([1, 4, 15, 20, 50], 23))->toBe([4, 4, 15]);
})->skip();

test('ChangeWithLowerElboniaCoins', function () {
    expect(Change::findFewestCoins([1, 5, 10, 21, 25], 63))->toBe([21, 21, 21]);
})->skip();

test('WithLargeTargetValue', function () {
    expect(Change::findFewestCoins([1, 2, 5, 10, 20, 50, 100], 999))
        ->toBe([
            2, 2, 5, 20, 20, 50, 100, 100,
            100, 100, 100, 100, 100, 100, 100,
        ]);
})->skip();

test('PossibleChangeWithoutUnitCoinsAvailable', function () {
    expect(Change::findFewestCoins([2, 5, 10, 20, 50], 21))
        ->toBe([2, 2, 2, 5, 10]);
})->skip();

test('AnotherPossibleChangeWithoutUnitCoinsAvailable', function () {
    expect(Change::findFewestCoins([4, 5], 27))->toBe([4, 4, 4, 5, 5, 5]);
})->skip();

test('NoCoinsForZero', function () {
    expect(Change::findFewestCoins([1, 5, 10, 21, 25], 0))->toBe([]);
})->skip();

test('ForChangeSmallerThanAvailableCoins', function () {
    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage('No coins small enough to make change');

    Change::findFewestCoins([5, 10], 3);
})->skip();

test('ErrorIfNoCombinationCanAddUpToTarget', function () {
    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage('No combination can add up to target');

    Change::findFewestCoins([5, 10], 94);
})->skip();

test('ChangeValueLessThanZero', function () {
    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage('Cannot make change for negative value');

    Change::findFewestCoins([1, 2, 5], -5);
})->skip();
