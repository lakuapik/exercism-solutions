<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/wordy/WordyTest.php

namespace Tests;

use App\Wordy;
use InvalidArgumentException;

test('Add1', function () {
    expect(Wordy::handle('What is 1 plus 1?'))->toBe(2);
});

test('Add2', function () {
    expect(Wordy::handle('What is 53 plus 2?'))->toBe(55);
});

test('AddNegativeNumbers', function () {
    expect(Wordy::handle('What is -1 plus -10?'))->toBe(-11);
});

test('AddMoreDigits', function () {
    expect(Wordy::handle('What is 123 plus 45678?'))->toBe(45801);
});

test('Subtract', function () {
    expect(Wordy::handle('What is 4 minus -12?'))->toBe(16);
});

test('Multiply', function () {
    expect(Wordy::handle('What is -3 multiplied by 25?'))->toBe(-75);
});

test('Divide', function () {
    expect(Wordy::handle('What is 33 divided by -3?'))->toBe(-11);
});

test('AddTwice', function () {
    expect(Wordy::handle('What is 1 plus 1 plus 1?'))->toBe(3);
});

test('AddThenSubtract', function () {
    expect(Wordy::handle('What is 1 plus 5 minus -2?'))->toBe(8);
});

test('SubtractTwice', function () {
    expect(Wordy::handle('What is 20 minus 4 minus 13?'))->toBe(3);
});

test('SubtractThenAdd', function () {
    expect(Wordy::handle('What is 17 minus 6 plus 3?'))->toBe(14);
});

test('MultiplyTwice', function () {
    expect(Wordy::handle('What is 2 multiplied by -2 multiplied by 3?'))
        ->toBe(-12);
});

test('AddThenMultiply', function () {
    expect(Wordy::handle('What is -3 plus 7 multiplied by -2?'))->toBe(-8);
});

test('DivideTwice', function () {
    expect(Wordy::handle('What is -12 divided by 2 divided by -3?'))->toBe(2);
});

test('TooAdvanced', function () {
    $this->expectException(InvalidArgumentException::class);
    Wordy::handle('What is 53 cubed?');
});

test('Irrelevant', function () {
    $this->expectException(InvalidArgumentException::class);
    Wordy::handle('Who is the president of the United States?');
});
