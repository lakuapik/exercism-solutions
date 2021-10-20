<?php

// https://github.com/exercism/php/blob/7e2a5b39e73f62c1c6fa08d04b46ce7c705eaa34/exercises/practice/etl/EtlTest.php

namespace Tests;

use App\Etl;

test('TransformOneValue', function () {
    expect(Etl::transform(['1' => ['A']]))->toBe(['a' => 1]);
})->skip();

test('TransformMoreValues', function () {
    expect(Etl::transform(['1' => str_split('AEIOU')]))
        ->toBe(['a' => 1, 'e' => 1, 'i' => 1, 'o' => 1, 'u' => 1]);
})->skip();

test('TransformMoreKeys', function () {
    expect(Etl::transform(['1' => str_split('AE'), '2' => str_split('DG')]))
        ->toBe(['a' => 1, 'e' => 1, 'd' => 2, 'g' => 2]);
})->skip();

test('TransformFullDataset', function () {
    expect(Etl::transform([
        '1'  => str_split('AEIOULNRST'),
        '2'  => str_split('DG'),
        '3'  => str_split('BCMP'),
        '4'  => str_split('FHVWY'),
        '5'  => str_split('K'),
        '8'  => str_split('JX'),
        '10' => str_split('QZ'),
    ]))->toBe([
        'a' => 1, 'b' => 3, 'c' => 3, 'd' => 2, 'e' => 1,
        'f' => 4, 'g' => 2, 'h' => 4, 'i' => 1, 'j' => 8,
        'k' => 5, 'l' => 1, 'm' => 3, 'n' => 1, 'o' => 1,
        'p' => 3, 'q' => 10, 'r' => 1, 's' => 1, 't' => 1,
        'u' => 1, 'v' => 4, 'w' => 4, 'x' => 8, 'y' => 4,
        'z' => 10,
    ]);
})->skip();
