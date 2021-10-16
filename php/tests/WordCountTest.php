<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/word-count/WordCountTest.php

namespace Tests;

use App\WordCount;

test('CountOneWord', function () {
    expect(WordCount::handle('word'))->toBe(['word' => 1]);
});

test('CountOneOfEachWord', function () {
    expect(WordCount::handle('one of each'))
        ->toBe(['one' => 1, 'of' => 1, 'each' => 1]);
});

test('MultipleOccurrencesOfAWord', function () {
    expect(WordCount::handle('one fish two fish red fish blue fish'))
        ->toBe(['one' => 1, 'fish' => 4, 'two' => 1, 'red' => 1, 'blue' => 1]);
});

test('IgnorePunctuation', function () {
    expect(WordCount::handle('car : carpet as java : javascript!!&@$%^&'))
        ->toBe([
            'car'  => 1, 'carpet' => 1, 'as' => 1,
            'java' => 1, 'javascript' => 1,
        ]);
});

test('IncludeNumbers', function () {
    expect(WordCount::handle('testing, 1, 2 testing'))
        ->toBeArray(['1' => 1, '2' => 1, 'testing' => 2]);
});

test('NormalizeCase', function () {
    expect(WordCount::handle('go Go GO Stop stop'))
        ->toBe(['go' => 3, 'stop' => 2]);
});

test('CountsMultiline', function () {
    expect(WordCount::handle("hello\nworld"))
        ->toBe(['hello' => 1, 'world' => 1]);
});

test('CountsTabs', function () {
    expect(WordCount::handle("hello\tworld"))
     ->toBe(['hello' => 1, 'world' => 1]);
});

test('CountsMultipleSpacesAsOne', function () {
    expect(WordCount::handle('hello  world'))
     ->toBe(['hello' => 1, 'world' => 1]);
});

test('DoesNotCountLeadingOrTrailingWhitespace', function () {
    expect(WordCount::handle("\t\tIntroductory Course      "))
     ->toBe(['introductory' => 1, 'course' => 1]);
});
