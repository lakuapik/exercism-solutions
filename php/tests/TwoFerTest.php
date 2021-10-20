<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/two-fer/TwoFerTest.php

namespace Tests;

use App\TwoFer;

test('NoNameGiven', function () {
    expect(TwoFer::handle())->toBe('One for you, one for me.');
});

test('ANameGiven', function () {
    expect(TwoFer::handle('Alice'))->toBe('One for Alice, one for me.');
});

test('AnotherNameGiven', function () {
    expect(TwoFer::handle('Bob'))->toBe('One for Bob, one for me.');
});
