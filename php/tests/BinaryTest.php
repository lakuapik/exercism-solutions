<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/binary/BinaryTest.php

namespace Tests;

use App\Binary;

test('ItParsesBinary0ToDecimal0', function () {
    expect(Binary::parse('0'))->toBe(0);
})->skip();

test('ItParsesBinary1ToDecimal1', function () {
    expect(Binary::parse('1'))->toBe(1);
})->skip();

test('ItParsesDigits', function () {
    expect(Binary::parse('10'))->toBe(2);
    expect(Binary::parse('11'))->toBe(3);
    expect(Binary::parse('100'))->toBe(4);
    expect(Binary::parse('1001'))->toBe(9);
})->skip();

test('ItParsesHundreds', function () {
    expect(Binary::parse('10000000'))->toBe(128);
    expect(Binary::parse('100111011'))->toBe(315);
    expect(Binary::parse('1100100000'))->toBe(800);
    expect(Binary::parse('1111100111'))->toBe(999);
})->skip();

test('ItParsesMaxInt', function () {
    expect(Binary::parse(
        '111111111111111111111111111111111111111111111111111111111111111'
    ))->toBe(9223372036854775807);
})->skip();

test('ItParsesValuesWithLeadingZeros', function () {
    expect(Binary::parse('01'))->toBe(1);
    expect(Binary::parse('0010'))->toBe(2);
    expect(Binary::parse('00011'))->toBe(3);
})->skip();

test('ItOnlyAcceptsStringsContainingZerosAndOnes', function ($value) {
    $this->expectException(InvalidArgumentException::class);

    Binary::parse($value);
})->with([
    ['2'], ['12345'], ['a'], ['0abcdef'],
])->skip();
