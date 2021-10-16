<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/darts/DartsTest.php

namespace Tests;

use App\Darts;

test('MissedTarget', function () {
    expect(new Darts(-9, 9))->score->toBe(0);
})->skip();

test('InOuterCircle', function () {
    expect(new Darts(0, 10))->score->toBe(1);
})->skip();

test('InMiddleCircle', function () {
    expect(new Darts(-5, 0))->score->toBe(5);
})->skip();

test('InInnerCircle', function () {
    expect(new Darts(0, -1))->score->toBe(10);
})->skip();

test('InCenter', function () {
    expect(new Darts(0, 0))->score->toBe(10);
})->skip();

test('NearCenter', function () {
    expect(new Darts(-0.1, -0.1))->score->toBe(10);
})->skip();

test('JustInsideCenter', function () {
    expect(new Darts(0.7, 0.7))->score->toBe(10);
})->skip();

test('JustOutsideCenter', function () {
    expect(new Darts(0.8, -0.8))->score->toBe(5);
})->skip();

test('JustWithinMiddleCircle', function () {
    expect(new Darts(-3.5, 3.5))->score->toBe(5);
})->skip();

test('JustOutsideMiddleCircle', function () {
    expect(new Darts(-3.6, -3.6))->score->toBe(1);
})->skip();

test('JustInsideOuterCircle', function () {
    expect(new Darts(-7.0, 7.0))->score->toBe(1);
})->skip();

test('JustOutsideOuterCircle', function () {
    expect(new Darts(7.1, -7.1))->score->toBe(0);
})->skip();

test('AsymmetricPositionBetweenInnerAndOuterCircles', function () {
    expect(new Darts(0.5, -4))->score->toBe(5);
})->skip();
