<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/mask-credit-card/MaskCreditCardTest.php

namespace Tests;

use App\MaskCreditCard;

test('DoNotMaskShorterThan6Chars', function () {
    expect(MaskCreditCard::handle('12345'))->toBe('12345');
});

test('ReturnEmptyStringWhenEmpty', function () {
    expect(MaskCreditCard::handle(''))->toBe('');
});

test('MaskCcWithDashes', function () {
    expect(MaskCreditCard::handle('1234-5678-9012'))->toBe('1###-####-9012');
});

test('MaskCcWithoutDashes', function () {
    expect(MaskCreditCard::handle('123456789012'))->toBe('1#######9012');
});

test('optional 1', function () {
    expect(MaskCreditCard::handle('--1234-5678-9012'))
        ->toBe('--1###-####-9012');
});

test('optional 2', function () {
    expect(MaskCreditCard::handle('--1234-5678-9012--'))
        ->toBe('--1###-####-9012--');
});
