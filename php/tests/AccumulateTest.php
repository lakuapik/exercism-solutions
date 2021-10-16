<?php

// https://github.com/exercism/php/blob/7e2a5b39e73f62c1c6fa08d04b46ce7c705eaa34/exercises/practice/accumulate/AccumulateTest.php

namespace Tests;

use App\Accumulate;

test('AccumulateEmpty', function () {
    expect(Accumulate::handle([], fn ($v) => $v ** 2))->toBe([]);
});

test('AccumulateSquares', function () {
    expect(Accumulate::handle([1, 2, 3], fn ($v) => $v ** 2))->toBe([1, 4, 9]);
});

test('AccumulateUpperCases', function () {
    expect(Accumulate::handle(['Hello', 'World!'], fn ($v) => strtoupper($v)))
        ->toBe(['HELLO', 'WORLD!']);
});

test('AccumulateReversedStrings', function () {
    expect(Accumulate::handle(['olleH', '!dlroW'], fn ($v) => strrev($v)))
        ->toBe(['Hello', 'World!']);
});

test('AccumulateConstants', function () {
    expect(Accumulate::handle(['Hello', 'World!'], fn () => 1))
        ->toBe([1, 1]);
});

test('AccumulateWithinAccumulate', function () {
    $chars = ['a', 'b', 'c'];
    $digits = [1, 2, 3];
    $expected = [['a1', 'a2', 'a3'], ['b1', 'b2', 'b3'], ['c1', 'c2', 'c3']];

    $this->assertEquals(
        $expected,
        Accumulate::handle($chars, function ($char) use ($digits) {
            return Accumulate::handle($digits, function ($digit) use ($char) {
                return $char . $digit;
            });
        })
    );
});

test('AccumulateUsingBuiltInFunction', function () {
    expect(Accumulate::handle([" Hello\t", "\t World!\n "], 'trim'))
        ->toBe(['Hello', 'World!']);
});

test('AccumulateUsingStaticMethod', function () {
    expect(Accumulate::handle(['Hello', 'World!'], '\Tests\Str::len'))
        ->toBe([5, 6]);
});

test('AccumulateUsingInvoke', function () {
    expect(Accumulate::handle(['foo'], new StrSpliter()))
        ->toBe([['f', 'o', 'o']]);
});

test('AccumulateUsingObjectAndArrayNotation', function () {
    expect(Accumulate::handle(['Yes', 0, []], [new Is(), 'truthy']))
        ->toBe([true, false, false]);
});

class Str
{
    public static function len($string): int
    {
        return strlen($string);
    }
}

class StrSpliter
{
    public function __invoke($value)
    {
        return str_split($value);
    }
}

class Is
{
    public function truthy($value): bool
    {
        return boolval($value);
    }
}
