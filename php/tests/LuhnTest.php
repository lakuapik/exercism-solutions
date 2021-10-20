<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/luhn/LuhnTest.php

namespace Tests;

use App\Luhn;

test('SingleDigitInvalid', function () {
    expect(Luhn::isValid('1'))->toBeFalse();
})->skip();

test('SingleZeroInvalid', function () {
    expect(Luhn::isValid('0'))->toBeFalse();
})->skip();

test('SimpleValidNumber', function () {
    expect(Luhn::isValid('59'))->toBeTrue();
})->skip();

test('SpaceHandling', function () {
    expect(Luhn::isValid(' 5 9 '))->toBeTrue();
})->skip();

test('ValidCanadianSocialInsuranceNumber', function () {
    expect(Luhn::isValid('046 454 286'))->toBeTrue();
})->skip();

test('InvalidCanadianSocialInsuranceNumber', function () {
    expect(Luhn::isValid('046 454 287'))->toBeFalse();
})->skip();

test('InvalidCreditCard', function () {
    expect(Luhn::isValid('8273 1232 7352 0569'))->toBeFalse();
})->skip();

test('NonDigitCharacterInValidStringInvalidatesTheString', function () {
    expect(Luhn::isValid('046a 454 286'))->toBeFalse();
})->skip();

test('ThatStringContainingSymbolsIsInvalid', function () {
    expect(Luhn::isValid('055£ 444$ 285'))->toBeFalse();
})->skip();

test('ThatStringContainingPunctuationIsInvalid', function () {
    expect(Luhn::isValid('055-444-285'))->toBeFalse();
})->skip();

test('SpaceAndSingleZeroIsInvalid', function () {
    expect(Luhn::isValid(' 0'))->toBeFalse();
})->skip();

test('MultipleZerosIsValid', function () {
    expect(Luhn::isValid(' 00000'))->toBeTrue();
})->skip();

test('ThatDoublingNineIsHandledCorrectly', function () {
    expect(Luhn::isValid('091'))->toBeTrue();
})->skip();

test('ThatStringContainingSymbolsWhichCouldBeZeroIsInvalid', function () {
    expect(Luhn::isValid(' ABCDEF'))->toBeFalse();
})->skip();
