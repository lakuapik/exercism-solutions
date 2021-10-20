<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/queen-attack/QueenAttackTest.php

namespace Tests;

use App\QueenAttack;

test('CreateQueenWithValidPosition', function () {
    expect(QueenAttack::placeQueen(2, 2))->toBeTrue();
})->skip();

test('QueenHasPositiveRank', function () {
    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage('The rank and file numbers must be positive.');

    QueenAttack::placeQueen(-2, 2);
})->skip();

test('QueenHasRankOnBoard', function () {
    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage('The position must be on a standard size chess board.');

    QueenAttack::placeQueen(8, 4);
})->skip();

test('QueenHasPositiveFile', function () {
    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage('The rank and file numbers must be positive.');

    QueenAttack::placeQueen(2, -2);
})->skip();

test('QueenHasFileOnBoard', function () {
    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage('The position must be on a standard size chess board.');

    QueenAttack::placeQueen(4, 8);
})->skip();

test('QueensCanAttack', function () {
    expect(QueenAttack::canAttack([2, 4], [6, 6]))->toBeFalse();
})->skip();

test('QueensCanAttackOnSameRank', function () {
    expect(QueenAttack::canAttack([2, 4], [2, 6]))->toBeTrue();
})->skip();

test('QueensCanAttackOnSameFile', function () {
    expect(QueenAttack::canAttack([4, 5], [2, 5]))->toBeTrue();
})->skip();

test('QueensCanAttackOnFirstDiagonal', function () {
    expect(QueenAttack::canAttack([2, 2], [0, 4]))->toBeTrue();
})->skip();

test('QueensCanAttackOnSecondDiagonal', function () {
    expect(QueenAttack::canAttack([2, 2], [3, 1]))->toBeTrue();
})->skip();

test('QueensCanAttackOnThirdDiagonal', function () {
    expect(QueenAttack::canAttack([2, 2], [1, 1]))->toBeTrue();
})->skip();

test('QueensCanAttackOnFourthDiagonal', function () {
    expect(QueenAttack::canAttack([2, 2], [5, 5]))->toBeTrue();
})->skip();
