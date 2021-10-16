<?php

// https://github.com/exercism/php/blob/7e2a5b39e73f62c1c6fa08d04b46ce7c705eaa34/exercises/practice/simple-cipher/SimpleCipherTest.php

namespace Tests;

use App\SimpleCipher;
use InvalidArgumentException;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertMatchesRegularExpression;

test('RandomCipherKeyIsLetters', function () {
    $cipher = new SimpleCipher();
    assertMatchesRegularExpression('/\A[a-z]+\z/', $cipher->key);
});

test('RandomKeyCipherEncode', function () {
    $cipher = new SimpleCipher();
    $plaintext = 'aaaaaaaaaa';
    assertEquals(substr($cipher->key, 0, 10), $cipher->encode($plaintext));
});

test('RandomKeyCipherDecode', function () {
    $cipher = new SimpleCipher();
    $plaintext = 'aaaaaaaaaa';
    assertEquals($plaintext, $cipher->decode(substr($cipher->key, 0, 10)));
});

test('RandomKeyCipherReversible', function () {
    $cipher = new SimpleCipher();
    $plaintext = 'abcdefghij';
    assertEquals($plaintext, $cipher->decode($cipher->encode($plaintext)));
});

test('CipherWithCapsKey', function () {
    $cipher = new SimpleCipher('ABCDEF');
})->throws(InvalidArgumentException::class);

test('CipherWithNumericKey', function () {
    $cipher = new SimpleCipher('12345');
})->throws(InvalidArgumentException::class);

test('CipherWithEmptyKey', function () {
    $cipher = new SimpleCipher('');
})->throws(InvalidArgumentException::class);

test('CipherKeyIsAsSubmitted', function () {
    $cipher = new SimpleCipher('abcdefghij');
    assertEquals($cipher->key, 'abcdefghij');
});

test('CipherEncode', function () {
    $cipher = new SimpleCipher('abcdefghij');
    $plaintext = 'aaaaaaaaaa';
    $ciphertext = 'abcdefghij';
    assertEquals($ciphertext, $cipher->encode($plaintext));
});

test('CipherDecode', function () {
    $cipher = new SimpleCipher('abcdefghij');
    $plaintext = 'aaaaaaaaaa';
    $ciphertext = 'abcdefghij';
    assertEquals($plaintext, $cipher->decode($ciphertext));
});

test('CipherReversible', function () {
    $cipher = new SimpleCipher('abcdefghij');
    $plaintext = 'abcdefghij';
    assertEquals($plaintext, $cipher->decode($cipher->encode($plaintext)));
});

test('DoubleShiftEncode', function () {
    $cipher = new SimpleCipher('iamapandabear');
    $plaintext = 'iamapandabear';
    $ciphertext = 'qayaeaagaciai';
    assertEquals($ciphertext, $cipher->encode($plaintext));
});

test('CipherEncodeWrap', function () {
    $cipher = new SimpleCipher('abcdefghij');
    $plaintext = 'zzzzzzzzzz';
    $ciphertext = 'zabcdefghi';
    assertEquals($ciphertext, $cipher->encode($plaintext));
});

test('ShiftCipherEncode', function () {
    $cipher = new SimpleCipher('dddddddddd');
    $plaintext = 'aaaaaaaaaa';
    $ciphertext = 'dddddddddd';
    assertEquals($ciphertext, $cipher->encode($plaintext));
});

test('ShiftCipherDecode', function () {
    $cipher = new SimpleCipher('dddddddddd');
    $plaintext = 'aaaaaaaaaa';
    $ciphertext = 'dddddddddd';
    assertEquals($plaintext, $cipher->decode($ciphertext));
});

test('ShiftCipherReversible', function () {
    $cipher = new SimpleCipher('dddddddddd');
    $plaintext = 'abcdefghij';
    assertEquals($plaintext, $cipher->decode($cipher->encode($plaintext)));
});
