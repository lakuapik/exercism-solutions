<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/ocr-numbers/OcrNumbersTest.php

namespace Tests;

use App\OcrNumbers;

/*
 * Recognition result should be returned as a string
 */

test('Recognizes0', function () {
    $input = [
        ' _ ',
        '| |',
        '|_|',
        '   ',
    ];
    $this->assertSame('0', OcrNumbers::recognize($input));
})->skip();

test('Recognizes1', function () {
    $input = [
        '   ',
        '  |',
        '  |',
        '   ',
    ];
    $this->assertSame('1', OcrNumbers::recognize($input));
})->skip();

/*
 * Unreadable but correctly sized inputs return ?
 */
test('Unreadable', function () {
    $input = [
        '   ',
        '  _',
        '  |',
        '   ',
    ];
    $this->assertSame('?', OcrNumbers::recognize($input));
})->skip();

/*
 * Input with a number of lines that is not a multiple of four raises an error
 */
test('ErrorWrongNumberOfLines', function () {
    $this->expectException(InvalidArgumentException::class);

    $input = [
        ' _ ',
        '| |',
        '   ',
    ];
    OcrNumbers::recognize($input);
})->skip();

/*
 * Input with a number of columns that is not a multiple of three raises an error
 */
test('ErrorWrongNumberOfColumns', function () {
    $this->expectException(InvalidArgumentException::class);

    $input = [
        '    ',
        '   |',
        '   |',
        '    ',
    ];
    OcrNumbers::recognize($input);
})->skip();

test('Recognizes110101100', function () {
    $input = [
        '       _     _        _  _ ',
        '  |  || |  || |  |  || || |',
        '  |  ||_|  ||_|  |  ||_||_|',
        '                           ',
    ];
    $this->assertSame('110101100', OcrNumbers::recognize($input));
})->skip();

/*
 * Garbled numbers in a string are replaced with ?
 */
test('Garbled', function () {
    $input = [
        '       _     _           _ ',
        '  |  || |  || |     || || |',
        '  |  | _|  ||_|  |  ||_||_|',
        '                           ',
    ];
    $this->assertSame('11?10?1?0', OcrNumbers::recognize($input));
})->skip();

test('Recognizes2', function () {
    $input = [
        ' _ ',
        ' _|',
        '|_ ',
        '   ',
    ];
    $this->assertSame('2', OcrNumbers::recognize($input));
})->skip();

test('Recognizes3', function () {
    $input = [
        ' _ ',
        ' _|',
        ' _|',
        '   ',
    ];
    $this->assertSame('3', OcrNumbers::recognize($input));
})->skip();

test('Recognizes4', function () {
    $input = [
        '   ',
        '|_|',
        '  |',
        '   ',
    ];
    $this->assertSame('4', OcrNumbers::recognize($input));
})->skip();

test('Recognizes5', function () {
    $input = [
        ' _ ',
        '|_ ',
        ' _|',
        '   ',
    ];
    $this->assertSame('5', OcrNumbers::recognize($input));
})->skip();

test('Recognizes6', function () {
    $input = [
        ' _ ',
        '|_ ',
        '|_|',
        '   ',
    ];
    $this->assertSame('6', OcrNumbers::recognize($input));
})->skip();

test('Recognizes7', function () {
    $input = [
        ' _ ',
        '  |',
        '  |',
        '   ',
    ];
    $this->assertSame('7', OcrNumbers::recognize($input));
})->skip();

test('Recognizes8', function () {
    $input = [
        ' _ ',
        '|_|',
        '|_|',
        '   ',
    ];
    $this->assertSame('8', OcrNumbers::recognize($input));
})->skip();

test('Recognizes9', function () {
    $input = [
        ' _ ',
        '|_|',
        ' _|',
        '   ',
    ];
    $this->assertSame('9', OcrNumbers::recognize($input));
})->skip();

test('RecognizesStringOfDecimalNumbers', function () {
    $input = [
        '    _  _     _  _  _  _  _  _ ',
        '  | _| _||_||_ |_   ||_||_|| |',
        '  ||_  _|  | _||_|  ||_| _||_|',
        '                              ',
    ];
    $this->assertSame('1234567890', OcrNumbers::recognize($input));
})->skip();

/*
 * Numbers separated by empty lines are recognized. Lines are joined by commas.
 */
test('LinesWithCommas', function () {
    $input = [
        '    _  _ ',
        '  | _| _|',
        '  ||_  _|',
        '         ',
        '    _  _ ',
        '|_||_ |_ ',
        '  | _||_|',
        '         ',
        ' _  _  _ ',
        '  ||_||_|',
        '  ||_| _|',
        '         ',
    ];
    $this->assertSame('123,456,789', OcrNumbers::recognize($input));
})->skip();
