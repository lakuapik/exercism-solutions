<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/ordinal-number/OrdinalNumberTest.php

namespace Tests;

use App\OrdinalNumber;

test('Zero', function () {
    expect(OrdinalNumber::handle(0))->toBe('0');
});

test('First', function () {
    expect(OrdinalNumber::handle(1))->toBe('1st');
});

test('Second', function () {
    expect(OrdinalNumber::handle(2))->toBe('2nd');
});

test('Third', function () {
    expect(OrdinalNumber::handle(3))->toBe('3rd');
});

test('Fourth', function () {
    expect(OrdinalNumber::handle(4))->toBe('4th');
});

test('Tenth', function () {
    expect(OrdinalNumber::handle(10))->toBe('10th');
});

test('Eleventh', function () {
    expect(OrdinalNumber::handle(11))->toBe('11th');
});

test('Twelfth', function () {
    expect(OrdinalNumber::handle(12))->toBe('12th');
});

test('Thirteenth', function () {
    expect(OrdinalNumber::handle(13))->toBe('13th');
});

test('RandomNumber', function () {
    expect(OrdinalNumber::handle(62))->toBe('62nd');
});
