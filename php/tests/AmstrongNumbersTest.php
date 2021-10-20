<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/armstrong-numbers/ArmstrongNumbersTest.php

namespace Tests;

use App\AmstrongNumbers;

test('Zero', function () {
    expect(AmstrongNumbers::handle(0))->toBeTrue();
})->skip();

test('SingleDigit', function () {
    expect(AmstrongNumbers::handle(5))->toBeTrue();
})->skip();

test('DoubleDigit', function () {
    expect(AmstrongNumbers::handle(10))->toBeFalse();
})->skip();

test('ThreeDigitIsArmstrongNumber', function () {
    expect(AmstrongNumbers::handle(153))->toBeTrue();
})->skip();

test('ThreeDigitIsNotArmstrongNumber', function () {
    expect(AmstrongNumbers::handle(100))->toBeFalse();
})->skip();

test('FourDigitIsArmstrongNumber', function () {
    expect(AmstrongNumbers::handle(9474))->toBeTrue();
})->skip();

test('FourDigitIsNotArmstrongNumber', function () {
    expect(AmstrongNumbers::handle(9475))->toBeFalse();
})->skip();

test('SevenDigitIsArmstrongNumber', function () {
    expect(AmstrongNumbers::handle(9926315))->toBeTrue();
})->skip();

test('SevenDigitIsNotArmstrongNumber', function () {
    expect(AmstrongNumbers::handle(9926314))->toBeFalse();
})->skip();
