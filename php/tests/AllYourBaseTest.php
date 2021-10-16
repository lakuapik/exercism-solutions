<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/all-your-base/AllYourBaseTest.php

namespace Tests;

use App\AllYourBase;

test('SingleBitOneToDecimal', function () {
    expect(AllYourBase::handle(2, [1], 10))->toBe([1]);
});

test('BinaryToSingleDecimal', function () {
    expect(AllYourBase::handle(2, [1, 0, 1], 10))->toBe([5]);
});

test('SingleDecimalToBinary', function () {
    expect(AllYourBase::handle(10, [5], 2))->toBe([1, 0, 1]);
})->skip();

test('BinaryToMultipleDecimal', function () {
    expect(AllYourBase::handle(2, [1, 0, 1, 0, 1, 0], 10))->toBe([4, 2]);
})->skip();

test('DecimalToBinary', function () {
    expect(AllYourBase::handle(10, [4, 2], 2))->toBe([1, 0, 1, 0, 1, 0]);
})->skip();

test('TrinaryToHexadecimal', function () {
    expect(AllYourBase::handle(3, [1, 1, 2, 0], 16))->toBe([2, 10]);
})->skip();

test('HexadecimalToTrinary', function () {
    expect(AllYourBase::handle(16, [2, 10], 3))->toBe([1, 1, 2, 0]);
})->skip();

test('15BitIntegers', function () {
    expect(AllYourBase::handle(97, [3, 46, 60], 73))->toBe([6, 10, 45]);
})->skip();

test('EmptyListReturnsNull', function () {
    expect(AllYourBase::handle(10, [], 10))->toBeNull();
})->skip();

test('SingleZeroReturnsNull', function () {
    expect(AllYourBase::handle(10, [0], 2))->toBeNull();
})->skip();

test('MultipleZerosReturnsNull', function () {
    expect(AllYourBase::handle(10, [0, 0, 0], 2))->toBeNull();
})->skip();

test('LeadingZerosReturnsNull', function () {
    expect(AllYourBase::handle(10, [0, 6, 0], 2))->toBeNull();
})->skip();

test('FirstBaseIsOne', function () {
    expect(AllYourBase::handle(1, [6, 0], 2))->toBeNull();
})->skip();

test('FirstBaseIsZero', function () {
    expect(AllYourBase::handle(0, [6, 0], 2))->toBeNull();
})->skip();

test('FirstBaseIsNegative', function () {
    expect(AllYourBase::handle(-1, [6, 0], 2))->toBeNull();
})->skip();

test('NegativeDigit', function () {
    expect(AllYourBase::handle(10, [1, -1, 0], 2))->toBeNull(null);
})->skip();

test('InvalidPositiveDigit', function () {
    expect(AllYourBase::handle(2, [1, 2, 0], 10))->toBeNull();
})->skip();

test('SecondBaseIsOne', function () {
    expect(AllYourBase::handle(2, [1, 1, 0], 1))->toBeNull();
})->skip();

test('SecondBaseIsZero', function () {
    expect(AllYourBase::handle(2, [1, 1, 0], 0))->toBeNull();
})->skip();

test('SecondBaseIsNegative', function () {
    expect(AllYourBase::handle(2, [1, 1, 0], -1))->toBeNull();
})->skip();

test('BothBasesIsNegative', function () {
    expect(AllYourBase::handle(-3, [1, 1, 0], -1))->toBeNull();
})->skip();
