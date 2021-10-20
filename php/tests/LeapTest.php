<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/leap/LeapTest.php

namespace Tests;

use App\Leap;

test('LeapYear', function () {
    expect(Leap::handle(1996))->toBeTrue();
});

test('NonLeapYear', function () {
    expect(Leap::handle(1997))->toBeFalse();
});

test('NonLeapEvenYear', function () {
    expect(Leap::handle(1998))->toBeFalse();
});

test('Century', function () {
    expect(Leap::handle(1900))->toBeFalse();
});

test('FourthCentury', function () {
    expect(Leap::handle(2400))->toBeTrue();
});
