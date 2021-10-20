<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/phone-number/PhoneNumberTest.php

namespace Tests;

use App\PhoneNumber;
use InvalidArgumentException;

test('CleansTheNumber', function () {
    expect(new PhoneNumber('(223) 456-7890'))->number()->toBe('2234567890');
})->skip();

test('CleansTheNumberWithDots', function () {
    expect(new PhoneNumber('223.456.7890'))->number()->toBe('2234567890');
})->skip();

test('CleansTheNumberWithMultipleSpaces', function () {
    expect(new PhoneNumber('223 456   7890   '))->number()->toBe('2234567890');
})->skip();

test('InvalidWhen9Digits', function () {
    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage('incorrect number of digits');

    new PhoneNumber('123456789');
})->skip();

test('InvalidWhen11DigitsDoesNotStartWithA1', function () {
    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage('11 digits must start with 1');

    new PhoneNumber('22234567890');
})->skip();

test('ValidWhen11DigitsAndStartingWith1', function () {
    expect(new PhoneNumber('12234567890'))->number()->toBe('2234567890');
})->skip();

test('ValidWhen11DigitsAndStartingWith1EvenWithPunctuation', function () {
    expect(new PhoneNumber('+1 (223) 456-7890'))->number()->toBe('2234567890');
})->skip();

test('InvalidWhenMoreThan11Digits', function () {
    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage('more than 11 digits');

    new PhoneNumber('321234567890');
})->skip();

test('InvalidWithLetters', function () {
    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage('letters not permitted');

    new PhoneNumber('123-abc-7890');
})->skip();

test('InvalidWithPunctuation', function () {
    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage('punctuations not permitted');

    new PhoneNumber('123-@:!-7890');
})->skip();

test('InvalidIfAreaCodeStartsWith0', function () {
    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage('area code cannot start with zero');

    new PhoneNumber('(023) 456-7890');
})->skip();

test('InvalidIfAreaCodeStartsWith1', function () {
    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage('area code cannot start with one');

    new PhoneNumber('(123) 456-7890');
})->skip();

test('InvalidIfExchangeCodeStartsWith0', function () {
    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage('exchange code cannot start with zero');

    new PhoneNumber('(223) 056-7890');
})->skip();

test('InvalidIfExchangeCodeStartsWith1', function () {
    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage('exchange code cannot start with one');

    new PhoneNumber('(223) 156-7890');
})->skip();

test('InvalidIfAreaCodeStartsWith0OnValid11DigitNumber', function () {
    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage('area code cannot start with zero');

    new PhoneNumber('1 (023) 456-7890');
})->skip();

test('InvalidIfAreaCodeStartsWith1OnValid11DigitNumber', function () {
    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage('area code cannot start with one');

    new PhoneNumber('1 (123) 456-7890');
})->skip();

test('InvalidIfExchangeCodeStartsWith0OnValid11DigitNumber', function () {
    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage('exchange code cannot start with zero');

    new PhoneNumber('1 (223) 056-7890');
})->skip();

test('InvalidIfExchangeCodeStartsWith1OnValid11DigitNumber', function () {
    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage('exchange code cannot start with one');

    new PhoneNumber('1 (223) 156-7890');
})->skip();
