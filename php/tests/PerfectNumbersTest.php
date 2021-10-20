<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/perfect-numbers/PerfectNumbersTest.php

namespace Tests;

use App\PerfectNumbers;

test('SmallPerfectNumberIsClassifiedCorrectly', function () {
    expect(PerfectNumbers::getClassification(6))->toBe('perfect');
})->skip();

test('MediumPerfectNumberIsClassifiedCorrectly', function () {
    expect(PerfectNumbers::getClassification(28))->toBe('perfect');
})->skip();

test('LargePerfectNumberIsClassifiedCorrectly', function () {
    expect(PerfectNumbers::getClassification(33550336))->toBe('perfect');
})->skip();

test('SmallAbundantNumberIsClassifiedCorrectly', function () {
    expect(PerfectNumbers::getClassification(12))->toBe('abundant');
})->skip();

test('MediumAbundantNumberIsClassifiedCorrectly', function () {
    expect(PerfectNumbers::getClassification(30))->toBe('abundant');
})->skip();

test('LargeAbundantNumberIsClassifiedCorrectly', function () {
    expect(PerfectNumbers::getClassification(33550335))->toBe('abundant');
})->skip();

test('SmallestPrimeDeficientNumberIsClassifiedCorrectly', function () {
    expect(PerfectNumbers::getClassification(2))->toBe('deficient');
})->skip();

test('SmallestNonPrimeDeficientNumberIsClassifiedCorrectly', function () {
    expect(PerfectNumbers::getClassification(4))->toBe('deficient');
})->skip();

test('MediumDeficientNumberIsClassifiedCorrectly', function () {
    expect(PerfectNumbers::getClassification(32))->toBe('deficient');
})->skip();

test('LargeDeficientNumberIsClassifiedCorrectly', function () {
    expect(PerfectNumbers::getClassification(33550337))->toBe('deficient');
})->skip();

test('ThatOneIsCorrectlyClassifiedAsDeficient', function () {
    expect(PerfectNumbers::getClassification(1))->toBe('deficient');
})->skip();

test('ThatNonNegativeIntegerIsRejected', function () {
    $this->expectException(InvalidArgumentException::class);

    PerfectNumbers::getClassification(0);
})->skip();

test('ThatNegativeIntegerIsRejected', function () {
    $this->expectException(InvalidArgumentException::class);

    PerfectNumbers::getClassification(-1);
})->skip();
