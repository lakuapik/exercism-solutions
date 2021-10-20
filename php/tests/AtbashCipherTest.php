<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/atbash-cipher/AtbashCipherTest.php

namespace Tests;

use App\AtbashCipher;

test('EncodeNo', function () {
    expect(AtbashCipher::encode('no'))->toBe('ml');
})->skip();

test('EncodeYes', function () {
    expect(AtbashCipher::encode('yes'))->toBe('bvh');
})->skip();

test('EncodeOmg', function () {
    expect(AtbashCipher::encode('OMG'))->toBe('lnt');
})->skip();

test('EncodeOmgWithSpaces', function () {
    expect(AtbashCipher::encode('O M G'))->toBe('lnt');
})->skip();

test('EncodeLongWord', function () {
    expect(AtbashCipher::encode('mindblowingly'))->toBe('nrmwy oldrm tob');
})->skip();

test('EncodeNumbers', function () {
    expect(AtbashCipher::encode('Testing, 1 2 3, testing.'))
        ->toBe('gvhgr mt123 gvhgr mt');
})->skip();

test('EncodeSentence', function () {
    expect(AtbashCipher::encode('Truth is fiction.'))->toBe('gifgs rhurx grlm');
})->skip();

test('EncodeAllTheThings', function () {
    $plaintext = 'The quick brown fox jumps over the lazy dog.';
    $encoded = 'gsvjf rxpyi ldmul cqfnk hlevi gsvoz abwlt';
    expect(AtbashCipher::encode($plaintext))->toBe($encoded);
})->skip();
