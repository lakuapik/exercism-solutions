<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/minesweeper/MinesweeperTest.php

namespace Tests;

use App\MineSweeper;
use InvalidArgumentException;

test('AnEmptyBoard', function () {
    $emptyBoard = '
+--+
|  |
+--+
    ';
    expect(MineSweeper::solve($emptyBoard))->toBe($emptyBoard);
})->skip();

test('AnIncompleteSideBorderThrowsAnException', function () {
    $this->expectException(InvalidArgumentException::class);

    MineSweeper::solve('
+--+
|
+--+
    ');
})->skip();

test('AnIncompleteTopBorderThrowsAnException', function () {
    $this->expectException(InvalidArgumentException::class);

    MineSweeper::solve('
+ -+
|  |
+--+
    ');
})->skip();

test('AMissingCornerThrowsAnException', function () {
    $this->expectException(InvalidArgumentException::class);

    MineSweeper::solve('
+--
|  |
+--+
    ');
})->skip();

test('ABoardWithLessThan2SquaresThrowsAnException', function () {
    $this->expectException(InvalidArgumentException::class);

    MineSweeper::solve('
+-+
| |
+-+
    ');
})->skip();

test('RowsOfSameLength', function () {
    $this->expectException(InvalidArgumentException::class);

    MineSweeper::solve('
+---+
|   |
| |
+---+
    ');
})->skip();

test('CanOnlyContainMines', function () {
    $this->expectException(InvalidArgumentException::class);

    MineSweeper::solve('
+---+
|  *|
| * |
| ? |
+---+
    ');
})->skip();

test('BoardWithOneMineToLeft', function () {
    expect(MineSweeper::solve('
+--+
|* |
+--+
    '))->toBe('
+--+
|*1|
+--+
    ');
})->skip();

test('BoardWithOneMineToRight', function () {
    expect(MineSweeper::solve('
+--+
| *|
+--+
    '))->toBe('
+--+
|1*|
+--+
    ');
})->skip();

test('BoardWithAMineToTopAndRight', function () {
    expect(MineSweeper::solve('
+--+
|* |
| *|
+--+
    '))->toBe('
+--+
|*2|
|2*|
+--+
    ');
})->skip();

test('BoardWithAMineToBottomAndLeftAndDiagonal', function () {
    expect(MineSweeper::solve('
+--+
|* |
|**|
+--+
    '))->toBe('
+--+
|*3|
|**|
+--+
    ');
})->skip();

test('AComplicatedBoard', function () {
    expect(MineSweeper::solve('
+-----+
| * * |
|  *  |
|  *  |
|     |
+-----+
    '))->toBe('
+-----+
|1*3*1|
|13*31|
| 2*2 |
| 111 |
+-----+
    ');
})->skip();
