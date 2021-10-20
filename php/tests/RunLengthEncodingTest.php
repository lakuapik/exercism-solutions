<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/run-length-encoding/RunLengthEncodingTest.php

namespace Tests;

use App\RunLengthEncoding;

test('EncodeEmptyString', function () {
    expect(RunLengthEncoding::encode(''))->toBe('');
})->skip();

test('EncodeSingleCharactersOnly', function () {
    expect(RunLengthEncoding::encode('XYZ'))->toBe('XYZ');
})->skip();

test('DecodeEmptyString', function () {
    expect(RunLengthEncoding::decode(''))->toBe('');
})->skip();

test('DecodeSingleCharactersOnly', function () {
    expect(RunLengthEncoding::decode('XYZ'))->toBe('XYZ');
})->skip();

test('EncodeSimple', function () {
    expect(RunLengthEncoding::encode('AABBBCCCC'))->toBe('2A3B4C');
})->skip();

test('DecodeSimple', function () {
    expect(RunLengthEncoding::decode('2A3B4C'))->toBe('AABBBCCCC');
})->skip();

test('EncodeWithSingleValues', function () {
    expect(RunLengthEncoding::encode('
        WWWWWWWWWWWWBWWWWWWWWWWWWBBBWWWWWWWWWWWWWWWWWWWWWWWWB
    '))->toBe('12WB12W3B24WB');
})->skip();

test('DecodeWithSingleValues', function () {
    expect(RunLengthEncoding::decode('12WB12W3B24WB'))
        ->toBe('WWWWWWWWWWWWBWWWWWWWWWWWWBBBWWWWWWWWWWWWWWWWWWWWWWWWB');
})->skip();

test('DecodeMultipleWhitespaceMixedInString', function () {
    expect(RunLengthEncoding::decode('2 hs2q q2w2 '))->toBe('  hsqq qww  ');
})->skip();

test('EncodeDecodeCombination', function () {
    expect(RunLengthEncoding::decode(RunLengthEncoding::encode('zzz ZZ  zZ')))
        ->toBe('zzz ZZ  zZ');
})->skip();
