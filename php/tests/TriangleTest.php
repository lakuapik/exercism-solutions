<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/triangle/TriangleTest.php

namespace Tests;

use App\Triangle;

test('EquilateralTrianglesHaveEqualSides', function () {
    expect(new Triangle(2, 2, 2))->kind()->toBe('equilateral');
});

test('LargerEquilateralTrianglesHaveEqualSides', function () {
    expect(new Triangle(10, 10, 10))->kind()->toBe('equilateral');
});

test('IsoscelesTriangleWhenLastTwoSidesAreEqual', function () {
    expect(new Triangle(3, 4, 4))->kind()->toBe('isosceles');
})->skip();

test('IsoscelesTriangleWhenFirstAndLastSidesAreEqual', function () {
    expect(new Triangle(4, 3, 4))->kind()->toBe('isosceles');
})->skip();

test('IsoscelesTriangleWhenFirstTwoSidesAreEqual', function () {
    expect(new Triangle(4, 4, 3))->kind()->toBe('isosceles');
})->skip();

test('IsoscelesTrianglesWithUnequalSideLargerThanEqualSides', function () {
    expect(new Triangle(4, 4, 7))->kind()->toBe('isosceles');
})->skip();

test('ScaleneTrianglesHaveNoEqualSides', function () {
    expect(new Triangle(3, 4, 5))->kind()->toBe('scalene');
})->skip();

test('2aEqualsBPlusCLooksLikeEquilateralButIsNot', function () {
    expect(new Triangle(5, 4, 6))->kind()->toBe('scalene');
})->skip();

test('ScaleneTrianglesHaveNoEqualSidesAtLargerScale', function () {
    expect(new Triangle(10, 11, 12))->kind()->toBe('scalene');
})->skip();

test('ScaleneTrianglesHaveNoEqualSidesInDescendingOrder', function () {
    expect(new Triangle(5, 4, 2))->kind()->toBe('scalene');
})->skip();

test('VerySmallTrianglesAreLegal', function () {
    expect(new Triangle(0.4, 0.6, 0.3))->kind()->toBe('scalene');
})->skip();

test('TrianglesWithNoSizeAreIllegal', function () {
    $this->expectException(Exception::class);

    (new Triangle(0, 0, 0))->kind();
})->skip();

test('TrianglesViolatingTriangleInequalityAreIllegal', function () {
    $this->expectException(Exception::class);

    (new Triangle(1, 1, 3))->kind();
})->skip();

test('TrianglesViolatingTriangleInequalityAreIllegal2', function () {
    $this->expectException(Exception::class);

    (new Triangle(7, 3, 2))->kind();
})->skip();

test('TrianglesViolatingTriangleInequalityAreIllegal3', function () {
    $this->expectException(Exception::class);

    (new Triangle(1, 3, 1))->kind();
})->skip();
