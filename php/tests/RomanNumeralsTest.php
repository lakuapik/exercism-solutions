<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/roman-numerals/RomanNumeralsTest.php

namespace Tests;

use App\RomanNumerals;

test('number 1', function () {
    expect(RomanNumerals::toRoman(1))->toBe('I');
})->skip();

test('number 2', function () {
    expect(RomanNumerals::toRoman(2))->toBe('II');
})->skip();

test('number 3', function () {
    expect(RomanNumerals::toRoman(3))->toBe('III');
})->skip();

test('number 4', function () {
    expect(RomanNumerals::toRoman(4))->toBe('IV');
})->skip();

test('number 5', function () {
    expect(RomanNumerals::toRoman(5))->toBe('V');
})->skip();

test('number 6', function () {
    expect(RomanNumerals::toRoman(6))->toBe('VI');
})->skip();

test('number 9', function () {
    expect(RomanNumerals::toRoman(9))->toBe('IX');
})->skip();

test('number 27', function () {
    expect(RomanNumerals::toRoman(27))->toBe('XXVII');
})->skip();

test('number 48', function () {
    expect(RomanNumerals::toRoman(48))->toBe('XLVIII');
})->skip();

test('number 49', function () {
    expect(RomanNumerals::toRoman(49))->toBe('XLIX');
})->skip();

test('number 59', function () {
    expect(RomanNumerals::toRoman(59))->toBe('LIX');
})->skip();

test('number 93', function () {
    expect(RomanNumerals::toRoman(93))->toBe('XCIII');
})->skip();

test('number 141', function () {
    expect(RomanNumerals::toRoman(141))->toBe('CXLI');
})->skip();

test('number 163', function () {
    expect(RomanNumerals::toRoman(163))->toBe('CLXIII');
})->skip();

test('number 402', function () {
    expect(RomanNumerals::toRoman(402))->toBe('CDII');
})->skip();

test('number 575', function () {
    expect(RomanNumerals::toRoman(575))->toBe('DLXXV');
})->skip();

test('number 911', function () {
    expect(RomanNumerals::toRoman(911))->toBe('CMXI');
})->skip();

test('number 1024', function () {
    expect(RomanNumerals::toRoman(1024))->toBe('MXXIV');
})->skip();

test('number 1998', function () {
    expect(RomanNumerals::toRoman(1998))->toBe('MCMXCVIII');
})->skip();

test('number 2999', function () {
    expect(RomanNumerals::toRoman(2999))->toBe('MMCMXCIX');
})->skip();

test('number 3000', function () {
    expect(RomanNumerals::toRoman(3000))->toBe('MMM');
})->skip();
