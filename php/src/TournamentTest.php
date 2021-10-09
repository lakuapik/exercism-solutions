<?php

// https://github.com/exercism/php/blob/7e2a5b39e73f62c1c6fa08d04b46ce7c705eaa34/exercises/practice/tournament/TournamentTest.php

use App\Tournament;

// test('header only no teams', function() {
//     $scores   = '';
//     $expected = 'Team                           | MP |  W |  D |  L |  P';
//     expect(Tournament::handle($scores))->toBe($expected);
// });

test('win is three points loss is zero points', function () {
    $scores = 'Allegoric Alaskans;Blithering Badgers;win';
    $expected =
        "Team                           | MP |  W |  D |  L |  P\n" .
        "Allegoric Alaskans             |  1 |  1 |  0 |  0 |  3\n" .
        "Blithering Badgers             |  1 |  0 |  0 |  1 |  0";
    expect(Tournament::handle($scores))->toBe($expected);
});


test('win can also be expressed as a loss', function () {
    $scores = 'Blithering Badgers;Allegoric Alaskans;loss';
    $expected =
        "Team                           | MP |  W |  D |  L |  P\n" .
        "Allegoric Alaskans             |  1 |  1 |  0 |  0 |  3\n" .
        "Blithering Badgers             |  1 |  0 |  0 |  1 |  0";
    expect(Tournament::handle($scores))->toBe($expected);
});

test('different teams can win', function () {
    $scores = 'Blithering Badgers;Allegoric Alaskans;win';
    $expected =
        "Team                           | MP |  W |  D |  L |  P\n" .
        "Blithering Badgers             |  1 |  1 |  0 |  0 |  3\n" .
        "Allegoric Alaskans             |  1 |  0 |  0 |  1 |  0";
    expect(Tournament::handle($scores))->toBe($expected);
});

test('a draw is one point each', function () {
    $scores = 'Allegoric Alaskans;Blithering Badgers;draw';
    $expected =
        "Team                           | MP |  W |  D |  L |  P\n" .
        "Allegoric Alaskans             |  1 |  0 |  1 |  0 |  1\n" .
        "Blithering Badgers             |  1 |  0 |  1 |  0 |  1";
    expect(Tournament::handle($scores))->toBe($expected);
});

test('there can be multiple matches', function () {
    $scores =
        "Allegoric Alaskans;Blithering Badgers;win\n" .
        "Allegoric Alaskans;Blithering Badgers;win";
    $expected =
        "Team                           | MP |  W |  D |  L |  P\n" .
        "Allegoric Alaskans             |  2 |  2 |  0 |  0 |  6\n" .
        "Blithering Badgers             |  2 |  0 |  0 |  2 |  0";
    expect(Tournament::handle($scores))->toBe($expected);
});

test('there can be more than one winner', function () {
    $scores =
        "Allegoric Alaskans;Blithering Badgers;loss\n" .
        "Allegoric Alaskans;Blithering Badgers;win";
    $expected =
        "Team                           | MP |  W |  D |  L |  P\n" .
        "Allegoric Alaskans             |  2 |  1 |  0 |  1 |  3\n" .
        "Blithering Badgers             |  2 |  1 |  0 |  1 |  3";
    expect(Tournament::handle($scores))->toBe($expected);
});

test('there can be more than two teams', function () {
    $scores =
        "Allegoric Alaskans;Blithering Badgers;win\n" .
        "Blithering Badgers;Courageous Californians;win\n" .
        "Courageous Californians;Allegoric Alaskans;loss";
    $expected =
        "Team                           | MP |  W |  D |  L |  P\n" .
        "Allegoric Alaskans             |  2 |  2 |  0 |  0 |  6\n" .
        "Blithering Badgers             |  2 |  1 |  0 |  1 |  3\n" .
        "Courageous Californians        |  2 |  0 |  0 |  2 |  0";
    expect(Tournament::handle($scores))->toBe($expected);
});

test('standard input', function () {
    $scores =
        "Allegoric Alaskans;Blithering Badgers;win\n" .
        "Devastating Donkeys;Courageous Californians;draw\n" .
        "Devastating Donkeys;Allegoric Alaskans;win\n" .
        "Courageous Californians;Blithering Badgers;loss\n" .
        "Blithering Badgers;Devastating Donkeys;loss\n" .
        "Allegoric Alaskans;Courageous Californians;win";
    $expected =
        "Team                           | MP |  W |  D |  L |  P\n" .
        "Devastating Donkeys            |  3 |  2 |  1 |  0 |  7\n" .
        "Allegoric Alaskans             |  3 |  2 |  0 |  1 |  6\n" .
        "Blithering Badgers             |  3 |  1 |  0 |  2 |  3\n" .
        "Courageous Californians        |  3 |  0 |  1 |  2 |  1";
    expect(Tournament::handle($scores))->toBe($expected);
});

test('incomplete competition where not all games played', function () {
    $scores =
        "Allegoric Alaskans;Blithering Badgers;loss\n" .
        "Devastating Donkeys;Allegoric Alaskans;loss\n" .
        "Courageous Californians;Blithering Badgers;draw\n" .
        "Allegoric Alaskans;Courageous Californians;win";
    $expected =
        "Team                           | MP |  W |  D |  L |  P\n" .
        "Allegoric Alaskans             |  3 |  2 |  0 |  1 |  6\n" .
        "Blithering Badgers             |  2 |  1 |  1 |  0 |  4\n" .
        "Courageous Californians        |  2 |  0 |  1 |  1 |  1\n" .
        "Devastating Donkeys            |  1 |  0 |  0 |  1 |  0";
    expect(Tournament::handle($scores))->toBe($expected);
});

test('ties sorted alphabetically', function () {
    $scores =
        "Courageous Californians;Devastating Donkeys;win\n" .
        "Allegoric Alaskans;Blithering Badgers;win\n" .
        "Devastating Donkeys;Allegoric Alaskans;loss\n" .
        "Courageous Californians;Blithering Badgers;win\n" .
        "Blithering Badgers;Devastating Donkeys;draw\n" .
        "Allegoric Alaskans;Courageous Californians;draw";
    $expected =
        "Team                           | MP |  W |  D |  L |  P\n" .
        "Allegoric Alaskans             |  3 |  2 |  1 |  0 |  7\n" .
        "Courageous Californians        |  3 |  2 |  1 |  0 |  7\n" .
        "Blithering Badgers             |  3 |  0 |  1 |  2 |  1\n" .
        "Devastating Donkeys            |  3 |  0 |  1 |  2 |  1";
    expect(Tournament::handle($scores))->toBe($expected);
});
