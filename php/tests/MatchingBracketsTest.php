<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/matching-brackets/MatchingBracketsTest.php

namespace Tests;

use App\MatchingBrackets;

test('PairedSquareBrackets', function () {
    $this->assertTrue(MatchingBrackets::match('[]'));
})->skip();

test('EmptyString', function () {
    $this->assertTrue(MatchingBrackets::match(''));
})->skip();

test('UnpairedBrackets', function () {
    $this->assertFalse(MatchingBrackets::match('[['));
})->skip();

test('WrongOrderedBrackets', function () {
    $this->assertFalse(MatchingBrackets::match('}{'));
})->skip();

test('PairedWithWhitespace', function () {
    $this->assertTrue(MatchingBrackets::match('{ }'));
})->skip();

test('SimpleNestedBrackets', function () {
    $this->assertTrue(MatchingBrackets::match('{[]}'));
})->skip();

test('SeveralPairedBrackets', function () {
    $this->assertTrue(MatchingBrackets::match('{}[]'));
})->skip();

test('PairedAndNestedBrackets', function () {
    $this->assertTrue(MatchingBrackets::match('([{}({}[])])'));
})->skip();

test('UnopenedClosingBrackets', function () {
    $this->assertFalse(MatchingBrackets::match('{[)][]}'));
})->skip();

test('UnpairedAndNestedBrackets', function () {
    $this->assertFalse(MatchingBrackets::match('([{])'));
})->skip();

test('PairedAndWrongNestedBrackets', function () {
    $this->assertFalse(MatchingBrackets::match('[({]})'));
})->skip();

test('MathExpression', function () {
    $this->assertTrue(MatchingBrackets::match('(((185 + 223.85) * 15) - 543)/2'));
})->skip();

test('ComplexLatexExpression', function () {
    $this->assertTrue(MatchingBrackets::match(
        '\\left(\\begin{array}{cc} \\frac{1}{3} & x\\\\ '
        . '\\mathrm{e}^{x} &... x^2 \\end{array}\\right)'
    ));
})->skip();
