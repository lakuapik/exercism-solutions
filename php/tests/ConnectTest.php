<?php

// https://github.com/exercism/php/blob/7e2a5b39e73f62c1c6fa08d04b46ce7c705eaa34/exercises/practice/connect/ConnectTest.php

namespace Tests;

use App\Connect;

function makeBoard($lines): array
{
    return array_map(function ($line) {
        return str_replace(' ', '', $line);
    }, $lines);
}

test('EmptyBoardHasNoWinner', function () {
    $lines = [
        '. . . . .',
        ' . . . . .',
        '  . . . . .',
        '   . . . . .',
        '    . . . . .',
    ];
    expect(Connect::resultFor(makeBoard($lines)))->toBeNull();
})->skip();

test('OneByOneBoardBlack', function () {
    $lines = ['X'];
    expect(Connect::resultFor(makeBoard($lines)))->toBe('black');
})->skip();

test('OneByOneBoardWhite', function () {
    $lines = ['O'];
    expect(Connect::resultFor(makeBoard($lines)))->toBe('white');
})->skip();

test('ConvultedPath', function () {
    $lines = [
        '. X X . .',
        ' X . X . X',
        '  . X . X .',
        '   . X X . .',
        '    O O O O O',
    ];
    expect(Connect::resultFor(makeBoard($lines)))->toBe('black');
})->skip();

test('RectangleWhiteWins', function () {
    $lines = [
        '. O . .',
        ' O X X X',
        '  O O O .',
        '   X X O X',
        '    . O X .',
    ];
    expect(Connect::resultFor(makeBoard($lines)))->toBe('white');
})->skip();

test('RectangleBlackWins', function () {
    $lines = [
        '. O . .',
        ' O X X X',
        '  O X O .',
        '   X X O X',
        '    . O X .',
    ];
    expect(Connect::resultFor(makeBoard($lines)))->toBe('black');
})->skip();

test('SpiralBlackWins', function () {
    $lines = [
        'OXXXXXXXX',
        'OXOOOOOOO',
        'OXOXXXXXO',
        'OXOXOOOXO',
        'OXOXXXOXO',
        'OXOOOXOXO',
        'OXXXXXOXO',
        'OOOOOOOXO',
        'XXXXXXXXO',
    ];
    expect(Connect::resultFor(makeBoard($lines)))->toBe('black');
})->skip();

test('SpiralNobodyWins', function () {
    $lines = [
        'OXXXXXXXX',
        'OXOOOOOOO',
        'OXOXXXXXO',
        'OXOXOOOXO',
        'OXOX.XOXO',
        'OXOOOXOXO',
        'OXXXXXOXO',
        'OOOOOOOXO',
        'XXXXXXXXO',
    ];
    expect(Connect::resultFor(makeBoard($lines)))->toBeNull();
})->skip();

test('IllegalDiagonalNobodyWins', function () {
    $lines = [
        'X O . .',
        ' O X X X',
        '  O X O .',
        '   . O X .',
        '    X X O O',
    ];
    expect(Connect::resultFor(makeBoard($lines)))->toBeNull();
})->skip();
