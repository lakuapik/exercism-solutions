<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/wordy/WordyTest.php

namespace Tests;

use App\VariableLengthQuantity;
use InvalidArgumentException;
use OverflowException;

test('ItEncodesSingleBytes', function () {
    expect(VariableLengthQuantity::encode([0x00]))->toBe([0x00]);

    expect(VariableLengthQuantity::encode([0x40]))->toBe([0x40]);

    expect(VariableLengthQuantity::encode([0x7F]))->toBe([0x7F]);
})->skip();

test('ItEncodesDoubleBytes', function () {
    expect(VariableLengthQuantity::encode([0x80]))->toBe([0x81, 0x00]);

    expect(VariableLengthQuantity::encode([0x2000]))->toBe([0xC0, 0x00]);

    expect(VariableLengthQuantity::encode([0x3FFF]))->toBe([0xFF, 0x7F]);
})->skip();

test('ItEncodesTripleBytes', function () {
    expect(VariableLengthQuantity::encode([0x4000]))
        ->toBe([0x81, 0x80, 0x00]);

    expect(VariableLengthQuantity::encode([0x100000]))
        ->toBe([0xC0, 0x80, 0x00]);

    expect(VariableLengthQuantity::encode([0x1FFFFF]))
        ->toBe([0xFF, 0xFF, 0x7F]);
})->skip();

test('ItEncodesQuadrupleBytes', function () {
    expect(VariableLengthQuantity::encode([0x200000]))
        ->toBe([0x81, 0x80, 0x80, 0x00]);

    expect(VariableLengthQuantity::encode([0x8000000]))
        ->toBe([0xC0, 0x80, 0x80, 0x00]);

    expect(VariableLengthQuantity::encode([0xFFFFFFF]))
        ->toBe([0xFF, 0xFF, 0xFF, 0x7F]);
})->skip();

test('ItEncodesMultipleValues', function () {
    expect(VariableLengthQuantity::encode([0x00, 0x00]))
        ->toBe([0x00, 0x00]);

    expect(VariableLengthQuantity::encode([0x40, 0x7F]))
        ->toBe([0x40, 0x7F]);

    expect(VariableLengthQuantity::encode([0x4000, 0x123456]))
        ->toBe([0x81, 0x80, 0x00, 0xC8, 0xE8, 0x56]);

    expect(VariableLengthQuantity::encode([
        0x2000, 0x123456, 0x0FFFFFFF, 0x00, 0x3FFF, 0x4000,
    ]))->toBe([
        0xC0, 0x00, 0xC8, 0xE8, 0x56, 0xFF, 0xFF, 0xFF,
        0x7F, 0x00, 0xFF, 0x7F, 0x81, 0x80, 0x00,
    ]);
})->skip();

test('ItDecodesFromSyngleBytes', function () {
    expect(VariableLengthQuantity::decode([0x00]))->toBe([0x00]);

    expect(VariableLengthQuantity::decode([0x40]))->toBe([0x40]);

    expect(VariableLengthQuantity::decode([0x7F]))->toBe([0x7F]);
})->skip();

test('ItDecodesDoubleBytes', function () {
    expect(VariableLengthQuantity::decode([0x81, 0x00]))->toBe([0x80]);

    expect(VariableLengthQuantity::decode([0xC0, 0x00]))->toBe([0x2000]);

    expect(VariableLengthQuantity::decode([0xFF, 0x7F]))->toBe([0x3FFF]);
})->skip();

test('ItDecodesTripleBytes', function () {
    expect(VariableLengthQuantity::decode([0x81, 0x80, 0x00]))
        ->toBe([0x4000]);

    expect(VariableLengthQuantity::decode([0xC0, 0x80, 0x00]))
        ->toBe([0x100000]);

    expect(VariableLengthQuantity::decode([0xFF, 0xFF, 0x7F]))
        ->toBe([0x1FFFFF]);
})->skip();

test('ItDecodesQuadrupleBytes', function () {
    expect(VariableLengthQuantity::decode([0x81, 0x80, 0x80, 0x00]))
        ->toBe([0x200000]);

    expect(VariableLengthQuantity::decode([0xC0, 0x80, 0x80, 0x00]))
        ->toBe([0x8000000]);

    expect(VariableLengthQuantity::decode([0xFF, 0xFF, 0xFF, 0x7F]))
        ->toBe([0xFFFFFFF]);
})->skip();

test('ItDecodesMultipleValues', function () {
    expect(VariableLengthQuantity::decode([0x00, 0x00]))->toBe([0x00, 0x00]);

    expect(VariableLengthQuantity::decode([0x40, 0x7F]))->toBe([0x40, 0x7F]);

    expect(VariableLengthQuantity::decode([
        0x81, 0x80, 0x00, 0xC8, 0xE8, 0x56,
    ]))->toBe([0x4000, 0x123456]);

    expect(VariableLengthQuantity::decode([
        0xC0, 0x00, 0xC8, 0xE8, 0x56, 0xFF, 0xFF, 0xFF,
        0x7F, 0x00, 0xFF, 0x7F, 0x81, 0x80, 0x00,
    ]))->toBe([0x2000, 0x123456, 0x0FFFFFFF, 0x00, 0x3FFF, 0x4000]);
})->skip();

test('IncompleteByteSequence', function () {
    $this->expectException(InvalidArgumentException::class);

    VariableLengthQuantity::decode([0xFF]);
})->skip();

test('Overflow', function () {
    $this->expectException(OverflowException::class);

    VariableLengthQuantity::decode([
        0xFF, 0xFF, 0xFF, 0xFF, 0xFF, 0xFF, 0xFF, 0xFF, 0xFF, 0x7F,
    ]);
})->skip();

test('ChainedDecodeEncodeGivesOriginalBytes', function () {
    $bytes = [
        0xC0, 0x00, 0xC8, 0xE8, 0x56, 0xFF, 0xFF, 0xFF,
        0x7F, 0x00, 0xFF, 0x7F, 0x81, 0x80, 0x00,
    ];
    $decoded = VariableLengthQuantity::decode($bytes);

    expect(VariableLengthQuantity::encode($decoded) == $bytes)->toBeTrue();
})->skip();

test('ChainedEncodeDecodeGivesOriginalIntegers', function () {
    $integers = [0x2000, 0x123456, 0x0FFFFFFF, 0x00, 0x3FFF, 0x4000];
    $encoded = VariableLengthQuantity::encode($integers);

    expect(VariableLengthQuantity::decode($encoded))->toBe($integers);
})->skip();
