<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/poker/PokerTest.php

namespace Tests;

use App\Poker;

test('SingleHandAlwaysWins', function () {
    $hands = ['4S,5S,7H,8D,JC'];
    $bestHands = ['4S,5S,7H,8D,JC'];

    expect(new Poker($hands))->bestHands->toBe($bestHands);
})->skip();

test('HighestCardOutOfAllHandsWins', function () {
    $hands = ['4D,5S,6S,8D,3C', '2S,4C,7S,9H,10H', '3S,4S,5D,6H,JH'];
    $bestHands = ['3S,4S,5D,6H,JH'];

    expect(new Poker($hands))->bestHands->toBe($bestHands);
})->skip();

test('HighCardTiesHaveMultipleWinners', function () {
    $hands = [
        '4D,5S,6S,8D,3C', '2S,4C,7S,9H,10H',
        '3S,4S,5D,6H,JH', '3H,4H,5C,6C,JD',
    ];
    $bestHands = ['3S,4S,5D,6H,JH', '3H,4H,5C,6C,JD'];

    expect(new Poker($hands))->bestHands->toBe($bestHands);
})->skip();

test('MultipleHandsWithSameHighCardsNextHighestCardWins', function () {
    $hands = ['3S,5H,6S,8D,7H', '2S,5D,6D,8C,7S'];
    $bestHands = ['3S,5H,6S,8D,7H'];

    expect(new Poker($hands))->bestHands->toBe($bestHands);
})->skip();

test('OnePairBeatsHighCard', function () {
    $hands = ['4S,5H,6C,8D,KH', '2S,4H,6S,4D,JH'];
    $bestHands = ['2S,4H,6S,4D,JH'];

    expect(new Poker($hands))->bestHands->toBe($bestHands);
})->skip();

test('HighestPairWins', function () {
    $hands = ['4S,2H,6S,2D,JH', '2S,4H,6C,4D,JD'];
    $bestHands = ['2S,4H,6C,4D,JD'];

    expect(new Poker($hands))->bestHands->toBe($bestHands);
})->skip();

test('TwoPairBeatsOnePair', function () {
    $hands = ['2S,8H,6S,8D,JH', '4S,5H,4C,8C,5C'];
    $bestHands = ['4S,5H,4C,8C,5C'];

    expect(new Poker($hands))->bestHands->toBe($bestHands);
})->skip();

test('HighestTwoPairWins', function () {
    $hands = ['2S,8H,2D,8D,3H', '4S,5H,4C,8S,5D'];
    $bestHands = ['2S,8H,2D,8D,3H'];

    expect(new Poker($hands))->bestHands->toBe($bestHands);
})->skip();

test('SameHighPairForTwoPairHigherSecondPairWins', function () {
    $hands = ['2S,QS,2C,QD,JH', 'JD,QH,JS,8D,QC'];
    $bestHands = ['JD,QH,JS,8D,QC'];

    expect(new Poker($hands))->bestHands->toBe($bestHands);
})->skip();

test('SameTwoPairsForTwoPairHighCardWins', function () {
    $hands = ['JD,QH,JS,8D,QC', 'JS,QS,JC,2D,QD'];
    $bestHands = ['JD,QH,JS,8D,QC'];

    expect(new Poker($hands))->bestHands->toBe($bestHands);
})->skip();

test('ThreeOfAKindBeatsTwoPair', function () {
    $hands = ['2S,8H,2H,8D,JH', '4S,5H,4C,8S,4H'];
    $bestHands = ['4S,5H,4C,8S,4H'];

    expect(new Poker($hands))->bestHands->toBe($bestHands);
})->skip();

test('HighestThreeOfAKindWins', function () {
    $hands = ['2S,2H,2C,8D,JH', '4S,AH,AS,8C,AD'];
    $bestHands = ['4S,AH,AS,8C,AD'];

    expect(new Poker($hands))->bestHands->toBe($bestHands);
})->skip();

test('SameThreeOfAKindHighCardsWin', function () {
    $hands = ['4S,AH,AS,7C,AD', '4S,AH,AS,8C,AD'];
    $bestHands = ['4S,AH,AS,8C,AD'];

    expect(new Poker($hands))->bestHands->toBe($bestHands);
})->skip();

test('StraightBeatsThreeOfAKind', function () {
    $hands = ['4S,5H,4C,8D,4H', '3S,4D,2S,6D,5C'];
    $bestHands = ['3S,4D,2S,6D,5C'];

    expect(new Poker($hands))->bestHands->toBe($bestHands);
})->skip();

test('AcesCanBeHighCardForAStraight', function () {
    $hands = ['4S,5H,4C,8D,4H', '10D,JH,QS,KD,AC'];
    $bestHands = ['10D,JH,QS,KD,AC'];

    expect(new Poker($hands))->bestHands->toBe($bestHands);
})->skip();

test('AcesCanBeLowCardForAStraight', function () {
    $hands = ['4S,5H,4C,8D,4H', '4D,AH,3S,2D,5C'];
    $bestHands = ['4D,AH,3S,2D,5C'];

    expect(new Poker($hands))->bestHands->toBe($bestHands);
})->skip();

test('HigherStraightWins', function () {
    $hands = ['4S,6C,7S,8D,5H', '5S,7H,8S,9D,6H'];
    $bestHands = ['5S,7H,8S,9D,6H'];

    expect(new Poker($hands))->bestHands->toBe($bestHands);
})->skip();

test('FlushBeatsAStraight', function () {
    $hands = ['4C,6H,7D,8D,5H', '2S,4S,5S,6S,7S'];
    $bestHands = ['2S,4S,5S,6S,7S'];

    expect(new Poker($hands))->bestHands->toBe($bestHands);
})->skip();

test('HighestFlushWins', function () {
    $hands = ['4H,7H,8H,9H,6H', '2S,4S,5S,6S,7S'];
    $bestHands = ['4H,7H,8H,9H,6H'];

    expect(new Poker($hands))->bestHands->toBe($bestHands);
})->skip();

test('FullHouseBeatsAFlush', function () {
    $hands = ['3H,6H,7H,8H,5H', '4S,5H,4C,5D,4H'];
    $bestHands = ['4S,5H,4C,5D,4H'];

    expect(new Poker($hands))->bestHands->toBe($bestHands);
})->skip();

test('HigherTripletFullHouseWins', function () {
    $hands = ['4H,4S,4D,9S,9D', '5H,5S,5D,8S,8D'];
    $bestHands = ['5H,5S,5D,8S,8D'];

    expect(new Poker($hands))->bestHands->toBe($bestHands);
})->skip();

test('SameTripleFullHouseHighPairWins', function () {
    $hands = ['5H,5S,5D,9S,9D', '5H,5S,5D,8S,8D'];
    $bestHands = ['5H,5S,5D,9S,9D'];

    expect(new Poker($hands))->bestHands->toBe($bestHands);
})->skip();

test('FourOfAKindBeatsAFullHouse', function () {
    $hands = ['4S,5H,4D,5D,4H', '3S,3H,2S,3D,3C'];
    $bestHands = ['3S,3H,2S,3D,3C'];

    expect(new Poker($hands))->bestHands->toBe($bestHands);
})->skip();

test('HigherFourOfAKindWins', function () {
    $hands = ['2S,2H,2C,8D,2D', '4S,5H,5S,5D,5C'];
    $bestHands = ['4S,5H,5S,5D,5C'];

    expect(new Poker($hands))->bestHands->toBe($bestHands);
})->skip();

test('SameFourOfAKindHighCardWins', function () {
    $hands = ['3S,3H,2S,3D,3C', '3S,3H,4S,3D,3C'];
    $bestHands = ['3S,3H,4S,3D,3C'];

    expect(new Poker($hands))->bestHands->toBe($bestHands);
})->skip();

test('StraightFlushBeatsFourOfAKind', function () {
    $hands = ['4S,5H,5S,5D,5C', '7S,8S,9S,6S,10S'];
    $bestHands = ['7S,8S,9S,6S,10S'];

    expect(new Poker($hands))->bestHands->toBe($bestHands);
})->skip();

test('HigherStraightFlushWins', function () {
    $hands = ['4H,6H,7H,8H,5H', '5S,7S,8S,9S,6S'];
    $bestHands = ['5S,7S,8S,9S,6S'];

    expect(new Poker($hands))->bestHands->toBe($bestHands);
})->skip();
