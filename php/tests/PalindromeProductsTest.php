<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/luhn/LuhnTest.php

namespace Tests;

use App\PalindromeProducts;

test('FindsTheSmallestPalindromeFromSingleDigitFactors', function () {
    [$value, $factors] = PalindromeProducts::smallest(1, 9);
    $this->assertEquals($value, 1);
    $this->assertEquals($factors, [
        [1, 1],
    ]);
})->skip();

test('FindsTheLargestPalindromeFromSingleDigitFactors', function () {
    [$value, $factors] = PalindromeProducts::largest(1, 9);
    $this->assertEquals($value, 9);
    $this->assertEquals($factors, [
        [1, 9],
        [3, 3],
    ]);
})->skip();

test('FindTheSmallestPalindromeFromDoubleDigitFactors', function () {
    [$value, $factors] = PalindromeProducts::smallest(10, 99);
    $this->assertEquals($value, 121);
    $this->assertEquals($factors, [
        [11, 11],
    ]);
})->skip();

test('FindTheLargestPalindromeFromDoubleDigitFactors', function () {
    [$value, $factors] = PalindromeProducts::largest(10, 99);
    $this->assertEquals($value, 9009);
    $this->assertEquals($factors, [
        [91, 99],
    ]);
})->skip();

test('FindSmallestPalindromeFromTripleDigitFactors', function () {
    [$value, $factors] = PalindromeProducts::smallest(100, 999);
    $this->assertEquals($value, 10201);
    $this->assertEquals($factors, [
        [101, 101],
    ]);
})->skip();

test('FindTheLargestPalindromeFromTripleDigitFactors', function () {
    [$value, $factors] = PalindromeProducts::largest(100, 999);
    $this->assertEquals($value, 906609);
    $this->assertEquals($factors, [
        [913, 993],
    ]);
})->skip();

test('FindSmallestPalindromeFromFourDigitFactors', function () {
    [$value, $factors] = PalindromeProducts::smallest(1000, 9999);
    $this->assertEquals($value, 1002001);
    $this->assertEquals($factors, [
        [1001, 1001],
    ]);
})->skip();

test('FindTheLargestPalindromeFromFourDigitFactors', function () {
    [$value, $factors] = PalindromeProducts::largest(1000, 9999);
    $this->assertEquals($value, 99000099);
    $this->assertEquals($factors, [
        [9901, 9999],
    ]);
})->skip();

test('EmptyResultForSmallestIfNoPalindromeInTheRange', function () {
    $this->expectException(Exception::class);
    PalindromeProducts::smallest(1002, 1003);
})->skip();

test('EmptyResultForLargestIfNoPalindromeInTheRange', function () {
    $this->expectException(Exception::class);
    PalindromeProducts::largest(15, 15);
})->skip();

test('ErrorResultForSmallestIfMinIsMoreThanMax', function () {
    $this->expectException(Exception::class);
    PalindromeProducts::smallest(10000, 1);
})->skip();

test('ErrorResultForLargestIfMinIsMoreThanMax', function () {
    $this->expectException(Exception::class);
    PalindromeProducts::largest(2, 1);
})->skip();
