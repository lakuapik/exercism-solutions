<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/anagram/AnagramTest.php

namespace Tests;

use App\Anagram;

test('NoMatches', function () {
    expect(Anagram::handle('diaper', ['hello', 'world', 'zombies', 'pants']))
        ->toBe([]);
});

test('DetectsSimpleAnagram', function () {
    expect(Anagram::handle('ant', ['tan', 'stand', 'at']))->toBe(['tan']);
});

test('DoesNotDetectFalsePositives', function () {
    expect(Anagram::handle('galea', ['eagle']))->toBe([]);
});

test('DetectsMultipleAnagrams', function () {
    expect(Anagram::handle('master', ['stream', 'pigeon', 'maters']))
        ->toBe(['stream', 'maters']);
});

test('DoesNotAnagram::handleubsets', function () {
    expect(Anagram::handle('good', ['dog', 'goody']))->toBe([]);
});

test('DetectsAnagram', function () {
    expect(Anagram::handle('listen', ['enlists', 'google', 'inlets', 'banana']))
        ->toBe(['inlets']);
});

test('DetectsMultipleAnagrams2', function () {
    expect(Anagram::handle('allergy', [
        'gallery', 'ballerina', 'regally', 'clergy', 'largely', 'leading',
    ]))->toBe(['gallery', 'regally', 'largely']);
});

test('DoesNotDetectIdenticalWords', function () {
    expect(Anagram::handle(
        'corn',
        ['corn', 'dark', 'Corn', 'rank', 'CORN', 'cron', 'park']
    ))->toBe(['cron']);
});

test('DoesNotDetectNonAnagramsWithIdenticalChecksum', function () {
    expect(Anagram::handle('mass', ['last']))->toBe([]);
});

test('DetectsAnagramsCaseInsensitively', function () {
    expect(Anagram::handle('Orchestra', [
        'cashregister', 'Carthorse', 'radishes',
    ]))->toBe(['Carthorse']);
});

test('DetectsAnagramsUsingCaseInsensitiveSubject', function () {
    expect(Anagram::handle(
        'Orchestra',
        ['cashregister', 'carthorse', 'radishes']
    ))->toBe(['carthorse']);
});

test('DetectsAnagramsUsingCaseInsensitvePossibleMatches', function () {
    expect(Anagram::handle(
        'orchestra',
        ['cashregister', 'Carthorse', 'radishes']
    ))->toBe(['Carthorse']);
});

test('DoesNotDetectAWordAsItsOwnAnagram', function () {
    expect(Anagram::handle('banana', ['Banana']))->toBe([]);
});

test('DoesNotDetectAAnagramIfTheOriginalWordIsRepeated', function () {
    expect(Anagram::handle('go', ['go Go GO']))->toBe([]);
});

test('AnagramsMustUseAllLettersExactlyOnce', function () {
    expect(Anagram::handle('tapper', ['patter']))->toBe([]);
});

test('EliminatesAnagramsWithTheSameChecksum', function () {
    expect(Anagram::handle('mass', ['last']))->toBe([]);
});

// test('DetectsUnicodeAnagrams', function () {
//     expect(Anagram::handle('ΑΒΓ', ['ΒΓΑ', 'ΒΓΔ', 'γβα']))->toBe(['ΒΓΑ', 'γβα']);
// })->skip('This requires `mbstring` to be installed and thus is optional.');

// test('EliminatesMisleadingUnicodeAnagrams', function () {
//     expect(Anagram::handle('ΑΒΓ', ['ABΓ']))->toBe([]);
// })->skip('This requires `mbstring` to be installed and thus is optional.');

test('CapitalWordIsNotOwnAnagram', function () {
    expect(Anagram::handle('BANANA', ['Banana']))->toBe([]);
});

test('AnagramsMustUseAllLettersExactlyOnce2', function () {
    expect(Anagram::handle('patter', ['tapper']))->toBe([]);
});
