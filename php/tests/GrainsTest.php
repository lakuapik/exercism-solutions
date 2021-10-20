<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/grains/GrainsTest.php

namespace Tests;

use App\Grains;

test('Input1', function () {
    expect(Grains::square(1))->toBe('1');
})->skip();

test('Input2', function () {
    expect(Grains::square(2))->toBe('2');
})->skip();

test('Input3', function () {
    expect(Grains::square(3))->toBe('4');
})->skip();

test('Input4', function () {
    expect(Grains::square(4))->toBe('8');
})->skip();

test('Input16', function () {
    expect(Grains::square(16))->toBe('32768');
})->skip();

test('Input32', function () {
    expect(Grains::square(32))->toBe('2147483648');
})->skip();

test('Input64', function () {
    expect(Grains::square(64))->toBe('9223372036854775808');
})->skip();

test('RejectsZero', function () {
    $this->expectException(InvalidArgumentException::class);

    Grains::square(0);
})->skip();

test('RejectsNegative', function () {
    $this->expectException(InvalidArgumentException::class);

    Grains::square(-1);
})->skip();

test('RejectsGreaterThan64', function () {
    $this->expectException(InvalidArgumentException::class);

    Grains::square(65);
})->skip();

test('Total', function () {
    expect(Grains::total())->toBe('18446744073709551615');
})->skip();
