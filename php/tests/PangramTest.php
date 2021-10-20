<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/pangram/PangramTest.php

namespace Tests;

use App\Pangram;

test('SentenceEmpty', function () {
    expect(Pangram::isPangram(''))->toBeFalse();
})->skip();

test('PangramWithOnlyLowerCase', function () {
    expect(Pangram::isPangram('
        the quick brown fox jumps over the lazy dog
    '))->toBeTrue();
})->skip();

test('MissingCharacterX', function () {
    expect(Pangram::isPangram('
        a quick movement of the enemy will jeopardize five gunboats
    '))->toBeFalse();
})->skip();

test('AnotherMissingCharacterX', function () {
    expect(Pangram::isPangram('
        the quick brown fish jumps over the lazy dog
    '))->toBeFalse();
})->skip();

test('PangramWithUnderscores', function () {
    expect(Pangram::isPangram('
        the_quick_brown_fox_jumps_over_the_lazy_dog
    '))->toBeTrue();
})->skip();

test('PangramWithNumbers', function () {
    expect(Pangram::isPangram('
        the 1 quick brown fox jumps over the 2 lazy dogs
    '))->toBeTrue();
})->skip();

test('MissingLettersReplacedByNumbers', function () {
    expect(Pangram::isPangram('
        7h3 qu1ck brown fox jumps ov3r 7h3 lazy dog
    '))->toBeFalse();
})->skip();

test('PangramWithMixedCaseAndPunctuation', function () {
    expect(Pangram::isPangram('
        \Five quacking Zephyrs jolt my wax bed.\\
    '))->toBeTrue();
})->skip();

test('PangramWithNonAsciiCharacters', function () {
    expect(Pangram::isPangram('
        Victor jagt zwölf Boxkämpfer quer über den großen Sylter Deich.
    '))->toBeTrue();
})->skip();

test('MissingLetterReplacedWithUpperCaseCharacter', function () {
    expect(Pangram::isPangram('
        Tthe quick brown fo jumps over the lazy dog
    '))->toBeFalse();
})->skip();
