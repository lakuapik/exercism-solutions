<?php

// https://github.com/exercism/php/blob/7e2a5b39e73f62c1c6fa08d04b46ce7c705eaa34/exercises/practice/high-scores/HighScoresTest.php

namespace Tests;

use App\HighScores;

test('ListOfScores', function () {
    expect(new HighScores([30, 50, 20, 70]))->scores->toBe([30, 50, 20, 70]);
});

test('LatestScore', function () {
    expect(new HighScores([100, 0, 90, 30]))->latest->toBe(30);
});

test('PersonalBest', function () {
    expect(new HighScores([40, 100, 70]))->personalBest->toBe(100);
});

test('PersonalTopThreeFromAListOfScores', function () {
    expect(new HighScores([10, 30, 90, 30, 100, 20, 10, 0, 30, 40, 40, 70, 70]))
        ->personalTopThree->toBe([100, 90, 70]);
});

test('PersonalTopHighestToLowest', function () {
    expect(new HighScores([20, 10, 30]))->personalTopThree->toBe([30, 20, 10]);
});

test('PersonalTopWhenThereIsATie', function () {
    expect(new HighScores([40, 20, 40, 30]))
        ->personalTopThree->toBe([40, 40, 30]);
});

test('PersonalTopWhenThereAreLessThan3', function () {
    expect(new HighScores([30, 70]))->personalTopThree->toBe([70, 30]);
});

test('PersonalTopWhenThereIsOnlyOne', function () {
    expect(new HighScores([40]))->personalTopThree->toBe([40]);
});

test('LatestScoreDoesNotChangeAfterGettingPersonalBest', function () {
    expect(new HighScores([20, 10, 30, 3, 2, 1]))
        ->personalBest->toBe(30)
        ->latest->toBe(1);
});

test('LatestScoreDoesNotChangeAfterGettingPersonalTopThree', function () {
    expect(new HighScores([20, 100, 30, 90, 2, 70]))
        ->personalTopThree->toBe([100, 90, 70])
        ->latest->toBe(70);
});
