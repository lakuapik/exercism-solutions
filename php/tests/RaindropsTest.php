<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/raindrops/RaindropsTest.php

namespace Tests;

use App\Raindrops;

test('number 1', function () {
    expect(Raindrops::handle(1))->toBe('1');
});

test('number 3', function () {
    expect(Raindrops::handle(3))->toBe('Pling');
});

test('number 5', function () {
    expect(Raindrops::handle(5))->toBe('Plang');
});

test('number 7', function () {
    expect(Raindrops::handle(7))->toBe('Plong');
});

test('number 6', function () {
    expect(Raindrops::handle(6))->toBe('Pling');
});

test('number 9', function () {
    expect(Raindrops::handle(9))->toBe('Pling');
});

test('number 10', function () {
    expect(Raindrops::handle(10))->toBe('Plang');
});

test('number 14', function () {
    expect(Raindrops::handle(14))->toBe('Plong');
});

test('number 15', function () {
    expect(Raindrops::handle(15))->toBe('PlingPlang');
});

test('number 21', function () {
    expect(Raindrops::handle(21))->toBe('PlingPlong');
});

test('number 25', function () {
    expect(Raindrops::handle(25))->toBe('Plang');
});

test('number 35', function () {
    expect(Raindrops::handle(35))->toBe('PlangPlong');
});

test('number 49', function () {
    expect(Raindrops::handle(49))->toBe('Plong');
});

test('number 52', function () {
    expect(Raindrops::handle(52))->toBe('52');
});

test('number 105', function () {
    expect(Raindrops::handle(105))->toBe('PlingPlangPlong');
});

test('number 12121', function () {
    expect(Raindrops::handle(12121))->toBe('12121');
});
