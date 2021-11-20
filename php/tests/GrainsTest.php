<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/grains/GrainsTest.php

namespace Tests;

use App\Grains;
use InvalidArgumentException;

test('Input1', function () {
    expect(Grains::square(1))->toBe('1');
});

test('Input2', function () {
    expect(Grains::square(2))->toBe('2');
});

test('Input3', function () {
    expect(Grains::square(3))->toBe('4');
});

test('Input4', function () {
    expect(Grains::square(4))->toBe('8');
});

test('Input16', function () {
    expect(Grains::square(16))->toBe('32768');
});

test('Input32', function () {
    expect(Grains::square(32))->toBe('2147483648');
});

test('Input64', function () {
    expect(Grains::square(64))->toBe('9223372036854775808');
});

test('RejectsZero', function () {
    $this->expectException(InvalidArgumentException::class);

    Grains::square(0);
});

test('RejectsNegative', function () {
    $this->expectException(InvalidArgumentException::class);

    Grains::square(-1);
});

test('RejectsGreaterThan64', function () {
    $this->expectException(InvalidArgumentException::class);

    Grains::square(65);
});

test('Total', function () {
    expect(Grains::total())->toBe('18446744073709551615');
});
