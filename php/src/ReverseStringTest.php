<?php

// https://github.com/exercism/php/blob/7e2a5b39e73f62c1c6fa08d04b46ce7c705eaa34/exercises/practice/reverse-string/ReverseStringTest.php

namespace Tests;

use App\ReverseString;

test('empty string')->expect(ReverseString::handle(''))->toBeEmpty();

test('word')->expect(ReverseString::handle('tobor'))->toBe('robot');

test('capitalize word')->expect(ReverseString::handle('nemaR'))->toBe('Ramen');

test('setence with punctuation')
    ->expect(ReverseString::handle("!yrgnuh m'I"))->toBe("I'm hungry!");

test('palindrome')->expect(ReverseString::handle('racecar'))->toBe('racecar');

test('even size word')->expect(ReverseString::handle('reward'))->toBe('drawer');
