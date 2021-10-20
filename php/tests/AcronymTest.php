<?php

// https://github.com/exercism/php/blob/7e2a5b39e73f62c1c6fa08d04b46ce7c705eaa34/exercises/practice/acronym/AcronymTest.php

namespace Tests;

use App\Acronym;

test('BasicTitleCase', function () {
    expect(Acronym::handle('Portable Network Graphics'))->toBe('PNG');
});

test('LowerCaseWord', function () {
    expect(Acronym::handle('Ruby on Rails'))->toBe('ROR');
});

test('CamelCase', function () {
    expect(Acronym::handle('HyperText Markup Language'))->toBe('HTML');
});

test('AllCapsWords', function () {
    expect(Acronym::handle('PHP: Hypertext Preprocessor'))->toBe('PHP');
});

test('Hyphenated', function () {
    expect(Acronym::handle('Complementary metal-oxide semiconductor'))
        ->toBe('CMOS');
});

test('OneWordIsNotAbbreviated', function () {
    expect(Acronym::handle('Word'))->toBeEmpty();
});

test('Unicode', function () {
    expect(Acronym::handle('Специализированная процессорная часть'))
        ->toBe('СПЧ');
})->skip();
