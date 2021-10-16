<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/affine-cipher/AffineCipherTest.php

namespace Tests;

use App\AffineCipher;

test('EncodeYes', function () {
    expect(AffineCipher::encode('yes', 5, 7))->toBe('xbt');
});
test('EncodeYeah', function () {
    expect(AffineCipher::encode('yeah', 5, 7))->toBe('xbhq');
});

test('EncodeNo', function () {
    expect(AffineCipher::encode('no', 15, 18))->toBe('fu');
});

test('EncodeOMG', function () {
    expect(AffineCipher::encode('OMG', 21, 3))->toBe('lvz');
});

test('EncodeOMGWithSpaces', function () {
    expect(AffineCipher::encode('O M G', 25, 47))->toBe('hjp');
});

test('Encodemindblowingly', function () {
    expect(AffineCipher::encode('mindblowingly', 11, 15))
        ->toBe('rzcwa gnxzc dgt');
});

test('Encodenumbers', function () {
    expect(AffineCipher::encode('Testing,1 2 3, testing.', 3, 4))
        ->toBe('jqgjc rw123 jqgjc rw');
});

test('EncodeDeepThought', function () {
    expect(AffineCipher::encode('Truth is fiction.', 5, 17))
        ->toBe('iynia fdqfb ifje');
});

test('EncodeAllTheLetters', function () {
    expect(AffineCipher::encode(
        'The quick brown fox jumps over the lazy dog.', 17, 33,
    ))->toBe('swxtj npvyk lruol iejdc blaxk swxmh qzglf');
});

test('EncodeWithANotCoprimeToM', function () {
    AffineCipher::encode('This is a test', 6, 17);
})->throws(\Exception::class);

test('DecodeExercism', function () {
    expect(AffineCipher::decode('tytgn fjr', 3, 7))->toBe('exercism');
});

test('DecodeASentence', function () {
    expect(AffineCipher::decode(
        'qdwju nqcro muwhn odqun oppmd aunwd o', 19, 16,
    ))->toBe('anobstacleisoftenasteppingstone');
});

test('DecodeNumbers', function () {
    expect(AffineCipher::decode('odpoz ub123 odpoz ub', 25, 7))
    ->toBe('testing123testing');
});

test('DecodeAllTheLetters', function () {
    expect(AffineCipher::decode(
        'swxtj npvyk lruol iejdc blaxk swxmh qzglf', 17, 33,
    ))->toBe('thequickbrownfoxjumpsoverthelazydog');
});

test('DecodeWithNoSpacesInInput', function () {
    expect(AffineCipher::decode('swxtjnpvyklruoliejdcblaxkswxmhqzglf', 17, 33))
        ->toBe('thequickbrownfoxjumpsoverthelazydog');
});

test('DecodeWithTooManySpaces', function () {
    expect(AffineCipher::decode('vszzm    cly   yd cg    qdp', 15, 16))
        ->toBe('jollygreengiant');
});

test('DecodeWithANotCoprimeToM', function () {
    AffineCipher::decode('Test', 13, 5);
})->throws(\Exception::class);
