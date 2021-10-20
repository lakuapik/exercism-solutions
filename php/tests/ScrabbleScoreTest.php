<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/scrabble-score/ScrabbleScoreTest.php

namespace Tests;

use App\ScrabbleScore;

test('LowercaseSingleLetter', function () {
    expect(ScrabbleScore::score('a'))->toBe(1);
})->skip();

test('UppercaseSingleLetter', function () {
    expect(ScrabbleScore::score('A'))->toBe(1);
})->skip();

test('ValuableSingleLetter', function () {
    expect(ScrabbleScore::score('f'))->toBe(4);
})->skip();

test('ShortWord', function () {
    expect(ScrabbleScore::score('at'))->toBe(2);
})->skip();

test('ShortValuableWord', function () {
    expect(ScrabbleScore::score('zoo'))->toBe(12);
})->skip();

test('MediumWord', function () {
    expect(ScrabbleScore::score('street'))->toBe(6);
})->skip();

test('MediumValuableWord', function () {
    expect(ScrabbleScore::score('quirky'))->toBe(22);
})->skip();

test('LongMixedCaseWord', function () {
    expect(ScrabbleScore::score('OxyphenButazone'))->toBe(41);
})->skip();

test('EnglishLikeWord', function () {
    expect(ScrabbleScore::score('pinata'))->toBe(8);
})->skip();

test('EmptyWordScore', function () {
    expect(ScrabbleScore::score(''))->toBe(0);
})->skip();

test('EntireAlphabetWord', function () {
    expect(ScrabbleScore::score('abcdefghijklmnopqrstuvwxyz'))->toBe(87);
})->skip();
