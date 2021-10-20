<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/pig-latin/PigLatinTest.php

namespace Tests;

use App\PigLatin;

test('WordBeginningWithP', function () {
    expect(PigLatin::translate('pig'))->toBe('igpay');
})->skip();

test('WordBeginningWithK', function () {
    expect(PigLatin::translate('koala'))->toBe('oalakay');
})->skip();

test('WordBeginningWithY', function () {
    expect(PigLatin::translate('yellow'))->toBe('ellowyay');
})->skip();

test('WordBeginningWithX', function () {
    expect(PigLatin::translate('xenon'))->toBe('enonxay');
})->skip();

test('WordBeginningWithA', function () {
    expect(PigLatin::translate('apple'))->toBe('appleay');
})->skip();

test('WordBeginningWithE', function () {
    expect(PigLatin::translate('ear'))->toBe('earay');
})->skip();

test('WordBeginningWithI', function () {
    expect(PigLatin::translate('igloo'))->toBe('iglooay');
})->skip();

test('WordBeginningWithO', function () {
    expect(PigLatin::translate('object'))->toBe('objectay');
})->skip();

test('WordBeginningWithU', function () {
    expect(PigLatin::translate('under'))->toBe('underay');
})->skip();

test('WordBeginningVowelFollowedByQu', function () {
    expect(PigLatin::translate('equal'))->toBe('equalay');
})->skip();

test('WordBeginningWithQWithoutAFollowingU', function () {
    expect(PigLatin::translate('qat'))->toBe('atqay');
})->skip();

test('WordBeginningWithCh', function () {
    expect(PigLatin::translate('chair'))->toBe('airchay');
})->skip();

test('WordBeginningWithQu', function () {
    expect(PigLatin::translate('queen'))->toBe('eenquay');
})->skip();

test('WordBeginningWithQuAndAPrecedingConsonant', function () {
    expect(PigLatin::translate('square'))->toBe('aresquay');
})->skip();

test('WordBeginningWithTh', function () {
    expect(PigLatin::translate('therapy'))->toBe('erapythay');
})->skip();

test('WordBeginningWithThr', function () {
    expect(PigLatin::translate('thrush'))->toBe('ushthray');
})->skip();

test('WordBeginningWithSch', function () {
    expect(PigLatin::translate('school'))->toBe('oolschay');
})->skip();

test('WordBeginningWithYt', function () {
    expect(PigLatin::translate('yttria'))->toBe('yttriaay');
})->skip();

test('WordBeginningWithXr', function () {
    expect(PigLatin::translate('xray'))->toBe('xrayay');
})->skip();

test('AWholePhrase', function () {
    expect(PigLatin::translate('quick fast run'))->toBe('ickquay astfay unray');
})->skip();
