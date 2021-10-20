<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/isogram/IsogramTest.php

namespace Tests;

use App\Isogram;

test('Isogram', function () {
    expect(Isogram::handle('duplicates'))->toBeTrue();
})->skip();

test('NotIsogram', function () {
    expect(Isogram::handle('eleven'))->toBeFalse();
})->skip();

test('MediumLongIsogram', function () {
    expect(Isogram::handle('subdermatoglyphic'))->toBeTrue();
})->skip();

test('CaseInsensitive', function () {
    expect(Isogram::handle('Alphabet'))->toBeFalse();
})->skip();

test('IsogramWithHyphen', function () {
    expect(Isogram::handle('thumbscrew-japingly'))->toBeTrue();
})->skip();

test('IgnoresMultipleHyphens', function () {
    expect(Isogram::handle('Hjelmqvist-Gryb-Zock-Pfund-Wax'))->toBeTrue();
})->skip();

test('WorksWithGermanLetters', function () {
    expect(Isogram::handle('Heizölrückstoßabdämpfung'))->toBeTrue();
})->skip();

test('IgnoresSpaces', function () {
    expect(Isogram::handle('the quick brown fox'))->toBeFalse();
})->skip();

test('IgnoresSpaces2', function () {
    expect(Isogram::handle('Emily Jung Schwartzkopf'))->toBeTrue();
})->skip();

test('DuplicateAccentedLetters', function () {
    expect(Isogram::handle('éléphant'))->toBeFalse();
})->skip();
