<?php

// https://github.com/exercism/php/blob/7e2a5b39e73f62c1c6fa08d04b46ce7c705eaa34/exercises/practice/crypto-square/CryptoSquareTest.php

namespace Tests;

use App\CryptoSquare;

test('EmptyPlaintextResultsInAnEmptyCiphertext', function () {
    expect(CryptoSquare::handle(''))->toBe('');
})->skip();

test('Lowercase', function () {
    expect(CryptoSquare::handle('A'))->toBe('a');
})->skip();

test('RemoveSpaces', function () {
    expect(CryptoSquare::handle('  b '))->toBe('b');
})->skip();

test('RemovePunctuation', function () {
    expect(CryptoSquare::handle('@1,%!'))->toBe('1');
})->skip();

test('9CharacterPlaintextResultsIn3ChunksOf3Characters', function () {
    expect(CryptoSquare::handle('This is fun!'))->toBe('tsf hiu isn');
})->skip();

test('8CharacterPlaintextResultsIn3ChunksTheLastOneWithATrailingSpace', function () {
    expect(CryptoSquare::handle('Chill out.'))->toBe('clu hlt io ');
})->skip();

test('54CharacterPlaintextResultsIn7ChunksTheLastTwoWithTrailingSpaces', function () {
    expect(CryptoSquare::handle('
        If man was meant to stay on the ground, god would have given us roots.
    '))->toBe('imtgdvs fearwer mayoogo anouuio ntnnlvt wttddes aohghn  sseoau ');
})->skip();
