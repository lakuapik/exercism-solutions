<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/trinary/TrinaryTest.php

namespace Tests;

use App\Trinary;

test('1IsDecimal1', function () {
    expect(Trinary::handle('1'))->toBe(1);
});

test('2IsDecimal2', function () {
    expect(Trinary::handle('2'))->toBe(2);
});

test('10IsDecimal3', function () {
    expect(Trinary::handle('10'))->toBe(3);
});

test('11IsDecimal4', function () {
    expect(Trinary::handle('11'))->toBe(4);
});

test('100IsDecimal9', function () {
    expect(Trinary::handle('100'))->toBe(9);
});

test('112IsDecimal14', function () {
    expect(Trinary::handle('112'))->toBe(14);
});

test('222IsDecimal26', function () {
    expect(Trinary::handle('222'))->toBe(26);
});

test('1122000120IsDecimal32091', function () {
    expect(Trinary::handle('1122000120'))->toBe(32091);
});

test('InvalidTrinaryIsDecimal0', function () {
    expect(Trinary::handle('13201'))->toBe(0);
});
