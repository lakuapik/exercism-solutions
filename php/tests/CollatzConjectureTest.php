<?php

// https://github.com/exercism/php/blob/7e2a5b39e73f62c1c6fa08d04b46ce7c705eaa34/exercises/practice/collatz-conjecture/CollatzConjectureTest.php

namespace Tests;

use App\CollatzConjecture;

test('ZeroStepsForOne', function () {
    expect(CollatzConjecture::steps(1))->toBeZero();
})->skip();

test('DivideIfEven', function () {
    expect(CollatzConjecture::steps(16))->toBe(4);
})->skip();

test('EvenAndOddSteps', function () {
    expect(CollatzConjecture::steps(12))->toBe(9);
})->skip();

test('LargeNumberOfEvenAndOddSteps', function () {
    expect(CollatzConjecture::steps(1000000))->toBe(152);
})->skip();

test('ZeroIsAnError', function () {
    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage('Only positive numbers are allowed');

    CollatzConjecture::steps(0);
})->skip();

test('NegativeValueIsAnError', function () {
    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage('Only positive numbers are allowed');

    CollatzConjecture::steps(-1);
})->skip();
