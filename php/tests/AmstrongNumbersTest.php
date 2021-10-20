<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/armstrong-numbers/ArmstrongNumbersTest.php

namespace Tests;

use App\AmstrongNumbers;

test('Zero', function () {
    expect(AmstrongNumbers::determine(0))->toBeTrue();
});

test('SingleDigit', function () {
    expect(AmstrongNumbers::determine(5))->toBeTrue();
});

test('DoubleDigit', function () {
    expect(AmstrongNumbers::determine(10))->toBeFalse();
});

test('ThreeDigitIsArmstrongNumber', function () {
    expect(AmstrongNumbers::determine(153))->toBeTrue();
});

test('ThreeDigitIsNotArmstrongNumber', function () {
    expect(AmstrongNumbers::determine(100))->toBeFalse();
});

test('FourDigitIsArmstrongNumber', function () {
    expect(AmstrongNumbers::determine(9474))->toBeTrue();
});

test('FourDigitIsNotArmstrongNumber', function () {
    expect(AmstrongNumbers::determine(9475))->toBeFalse();
});

test('SevenDigitIsArmstrongNumber', function () {
    expect(AmstrongNumbers::determine(9926315))->toBeTrue();
});

test('SevenDigitIsNotArmstrongNumber', function () {
    expect(AmstrongNumbers::determine(9926314))->toBeFalse();
});
