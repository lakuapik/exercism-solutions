<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/meetup/MeetupTest.php

namespace Tests;

use App\Meetup;
use DateTimeImmutable;

test('MonteenthOfMay2013', function () {
    expect(Meetup::day(2013, '5', 'teenth', 'Monday'))
        ->toBe(new DateTimeImmutable('2013/5/13'));
})->skip();

test('MonteenthOfAugust2013', function () {
    expect(Meetup::day(2013, '8', 'teenth', 'Monday'))
        ->toBe(new DateTimeImmutable('2013/8/19'));
})->skip();

test('MonteenthOfSeptember2013', function () {
    expect(Meetup::day(2013, '9', 'teenth', 'Monday'))
        ->toBe(new DateTimeImmutable('2013/9/16'));
})->skip();

test('TuesteenthOfMarch2013', function () {
    expect(Meetup::day(2013, '3', 'teenth', 'Tuesday'))
        ->toBe(new DateTimeImmutable('2013/3/19'));
})->skip();

test('TuesteenthOfApril2013', function () {
    expect(Meetup::day(2013, '4', 'teenth', 'Tuesday'))
        ->toBe(new DateTimeImmutable('2013/4/16'));
})->skip();

test('TuesteenthOfAugust2013', function () {
    expect(Meetup::day(2013, '8', 'teenth', 'Tuesday'))
        ->toBe(new DateTimeImmutable('2013/8/13'));
})->skip();

test('WednesteenthOfJanuary2013', function () {
    expect(Meetup::day(2013, '1', 'teenth', 'Wednesday'))
        ->toBe(new DateTimeImmutable('2013/1/16'));
})->skip();

test('WednesteenthOfFebruary2013', function () {
    expect(Meetup::day(2013, '2', 'teenth', 'Wednesday'))
        ->toBe(new DateTimeImmutable('2013/2/13'));
})->skip();

test('WednesteenthOfJune2013', function () {
    expect(Meetup::day(2013, '6', 'teenth', 'Wednesday'))
        ->toBe(new DateTimeImmutable('2013/6/19'));
})->skip();

test('ThursteenthOfMay2013', function () {
    expect(Meetup::day(2013, '5', 'teenth', 'Thursday'))
        ->toBe(new DateTimeImmutable('2013/5/16'));
})->skip();

test('ThursteenthOfJune2013', function () {
    expect(Meetup::day(2013, '6', 'teenth', 'Thursday'))
        ->toBe(new DateTimeImmutable('2013/6/13'));
})->skip();

test('ThursteenthOfSeptember2013', function () {
    expect(Meetup::day(2013, '9', 'teenth', 'Thursday'))
        ->toBe(new DateTimeImmutable('2013/9/19'));
})->skip();

test('FriteenthOfApril2013', function () {
    expect(Meetup::day(2013, '4', 'teenth', 'Friday'))
        ->toBe(new DateTimeImmutable('2013/4/19'));
})->skip();

test('FriteenthOfAugust2013', function () {
    expect(Meetup::day(2013, '8', 'teenth', 'Friday'))
        ->toBe(new DateTimeImmutable('2013/8/16'));
})->skip();

test('FriteenthOfSeptember2013', function () {
    expect(Meetup::day(2013, '9', 'teenth', 'Friday'))
        ->toBe(new DateTimeImmutable('2013/9/13'));
})->skip();

test('SaturteenthOfFebruary2013', function () {
    expect(Meetup::day(2013, '2', 'teenth', 'Saturday'))
        ->toBe(new DateTimeImmutable('2013/2/16'));
})->skip();

test('SaturteenthOfApril2013', function () {
    expect(Meetup::day(2013, '4', 'teenth', 'Saturday'))
        ->toBe(new DateTimeImmutable('2013/4/13'));
})->skip();

test('SaturteenthOfOctober2013', function () {
    expect(Meetup::day(2013, '10', 'teenth', 'Saturday'))
        ->toBe(new DateTimeImmutable('2013/10/19'));
})->skip();

test('SunteenthOfMay2013', function () {
    expect(Meetup::day(2013, '5', 'teenth', 'Sunday'))
        ->toBe(new DateTimeImmutable('2013/5/19'));
})->skip();

test('SunteenthOfJune2013', function () {
    expect(Meetup::day(2013, '6', 'teenth', 'Sunday'))
        ->toBe(new DateTimeImmutable('2013/6/16'));
})->skip();

test('SunteenthOfOctober2013', function () {
    expect(Meetup::day(2013, '10', 'teenth', 'Sunday'))
        ->toBe(new DateTimeImmutable('2013/10/13'));
})->skip();

test('FirstMondayOfMarch2013', function () {
    expect(Meetup::day(2013, '3', 'first', 'Monday'))
        ->toBe(new DateTimeImmutable('2013/3/4'));
})->skip();

test('FirstMondayOfApril2013', function () {
    expect(Meetup::day(2013, '4', 'first', 'Monday'))
        ->toBe(new DateTimeImmutable('2013/4/1'));
})->skip();

test('FirstTuesdayOfMay2013', function () {
    expect(Meetup::day(2013, '5', 'first', 'Tuesday'))
        ->toBe(new DateTimeImmutable('2013/5/7'));
})->skip();

test('FirstTuesdayOfJune2013', function () {
    expect(Meetup::day(2013, '6', 'first', 'Tuesday'))
        ->toBe(new DateTimeImmutable('2013/6/4'));
})->skip();

test('FirstWednesdayOfJuly2013', function () {
    expect(Meetup::day(2013, '7', 'first', 'Wednesday'))
        ->toBe(new DateTimeImmutable('2013/7/3'));
})->skip();

test('FirstWednesdayOfAugust2013', function () {
    expect(Meetup::day(2013, '8', 'first', 'Wednesday'))
        ->toBe(new DateTimeImmutable('2013/8/7'));
})->skip();

test('FirstThursdayOfSeptember2013', function () {
    expect(Meetup::day(2013, '9', 'first', 'Thursday'))
        ->toBe(new DateTimeImmutable('2013/9/5'));
})->skip();

test('FirstThursdayOfOctober2013', function () {
    expect(Meetup::day(2013, '10', 'first', 'Thursday'))
        ->toBe(new DateTimeImmutable('2013/10/3'));
})->skip();

test('FirstFridayOfNovember2013', function () {
    expect(Meetup::day(2013, '11', 'first', 'Friday'))
        ->toBe(new DateTimeImmutable('2013/11/1'));
})->skip();

test('FirstFridayOfDecember2013', function () {
    expect(Meetup::day(2013, '12', 'first', 'Friday'))
        ->toBe(new DateTimeImmutable('2013/12/6'));
})->skip();

test('FirstSaturdayOfJanuary2013', function () {
    expect(Meetup::day(2013, '1', 'first', 'Saturday'))
        ->toBe(new DateTimeImmutable('2013/1/5'));
})->skip();

test('FirstSaturdayOfFebruary2013', function () {
    expect(Meetup::day(2013, '2', 'first', 'Saturday'))
        ->toBe(new DateTimeImmutable('2013/2/2'));
})->skip();

test('FirstSundayOfMarch2013', function () {
    expect(Meetup::day(2013, '3', 'first', 'Sunday'))
        ->toBe(new DateTimeImmutable('2013/3/3'));
})->skip();

test('FirstSundayOfApril2013', function () {
    expect(Meetup::day(2013, '4', 'first', 'Sunday'))
        ->toBe(new DateTimeImmutable('2013/4/7'));
})->skip();

test('SecondMondayOfMarch2013', function () {
    expect(Meetup::day(2013, '3', 'second', 'Monday'))
        ->toBe(new DateTimeImmutable('2013/3/11'));
})->skip();

test('SecondMondayOfApril2013', function () {
    expect(Meetup::day(2013, '4', 'second', 'Monday'))
        ->toBe(new DateTimeImmutable('2013/4/8'));
})->skip();

test('SecondTuesdayOfMay2013', function () {
    expect(Meetup::day(2013, '5', 'second', 'Tuesday'))
        ->toBe(new DateTimeImmutable('2013/5/14'));
})->skip();

test('SecondTuesdayOfJune2013', function () {
    expect(Meetup::day(2013, '6', 'second', 'Tuesday'))
        ->toBe(new DateTimeImmutable('2013/6/11'));
})->skip();

test('SecondWednesdayOfJuly2013', function () {
    expect(Meetup::day(2013, '7', 'second', 'Wednesday'))
        ->toBe(new DateTimeImmutable('2013/7/10'));
})->skip();

test('SecondWednesdayOfAugust2013', function () {
    expect(Meetup::day(2013, '8', 'second', 'Wednesday'))
        ->toBe(new DateTimeImmutable('2013/8/14'));
})->skip();

test('SecondThursdayOfSeptember2013', function () {
    expect(Meetup::day(2013, '9', 'second', 'Thursday'))
        ->toBe(new DateTimeImmutable('2013/9/12'));
})->skip();

test('SecondThursdayOfOctober2013', function () {
    expect(Meetup::day(2013, '10', 'second', 'Thursday'))
        ->toBe(new DateTimeImmutable('2013/10/10'));
})->skip();

test('SecondFridayOfNovember2013', function () {
    expect(Meetup::day(2013, '11', 'second', 'Friday'))
        ->toBe(new DateTimeImmutable('2013/11/8'));
})->skip();

test('SecondFridayOfDecember2013', function () {
    expect(Meetup::day(2013, '12', 'second', 'Friday'))
        ->toBe(new DateTimeImmutable('2013/12/13'));
})->skip();

test('SecondSaturdayOfJanuary2013', function () {
    expect(Meetup::day(2013, '1', 'second', 'Saturday'))
        ->toBe(new DateTimeImmutable('2013/1/12'));
})->skip();

test('SecondSaturdayOfFebruary2013', function () {
    expect(Meetup::day(2013, '2', 'second', 'Saturday'))
        ->toBe(new DateTimeImmutable('2013/2/9'));
})->skip();

test('SecondSundayOfMarch2013', function () {
    expect(Meetup::day(2013, '3', 'second', 'Sunday'))
        ->toBe(new DateTimeImmutable('2013/3/10'));
})->skip();

test('SecondSundayOfApril2013', function () {
    expect(Meetup::day(2013, '4', 'second', 'Sunday'))
        ->toBe(new DateTimeImmutable('2013/4/14'));
})->skip();

test('ThirdMondayOfMarch2013', function () {
    expect(Meetup::day(2013, '3', 'third', 'Monday'))
        ->toBe(new DateTimeImmutable('2013/3/18'));
})->skip();

test('ThirdMondayOfApril2013', function () {
    expect(Meetup::day(2013, '4', 'third', 'Monday'))
        ->toBe(new DateTimeImmutable('2013/4/15'));
})->skip();

test('ThirdTuesdayOfMay2013', function () {
    expect(Meetup::day(2013, '5', 'third', 'Tuesday'))
        ->toBe(new DateTimeImmutable('2013/5/21'));
})->skip();

test('ThirdTuesdayOfJune2013', function () {
    expect(Meetup::day(2013, '6', 'third', 'Tuesday'))
        ->toBe(new DateTimeImmutable('2013/6/18'));
})->skip();

test('ThirdWednesdayOfJuly2013', function () {
    expect(Meetup::day(2013, '7', 'third', 'Wednesday'))
        ->toBe(new DateTimeImmutable('2013/7/17'));
})->skip();

test('ThirdWednesdayOfAugust2013', function () {
    expect(Meetup::day(2013, '8', 'third', 'Wednesday'))
        ->toBe(new DateTimeImmutable('2013/8/21'));
})->skip();

test('ThirdThursdayOfSeptember2013', function () {
    expect(Meetup::day(2013, '9', 'third', 'Thursday'))
        ->toBe(new DateTimeImmutable('2013/9/19'));
})->skip();

test('ThirdThursdayOfOctober2013', function () {
    expect(Meetup::day(2013, '10', 'third', 'Thursday'))
        ->toBe(new DateTimeImmutable('2013/10/17'));
})->skip();

test('ThirdFridayOfNovember2013', function () {
    expect(Meetup::day(2013, '11', 'third', 'Friday'))
        ->toBe(new DateTimeImmutable('2013/11/15'));
})->skip();

test('ThirdFridayOfDecember2013', function () {
    expect(Meetup::day(2013, '12', 'third', 'Friday'))
        ->toBe(new DateTimeImmutable('2013/12/20'));
})->skip();

test('ThirdSaturdayOfJanuary2013', function () {
    expect(Meetup::day(2013, '1', 'third', 'Saturday'))
        ->toBe(new DateTimeImmutable('2013/1/19'));
})->skip();

test('ThirdSaturdayOfFebruary2013', function () {
    expect(Meetup::day(2013, '2', 'third', 'Saturday'))
        ->toBe(new DateTimeImmutable('2013/2/16'));
})->skip();

test('ThirdSundayOfMarch2013', function () {
    expect(Meetup::day(2013, '3', 'third', 'Sunday'))
        ->toBe(new DateTimeImmutable('2013/3/17'));
})->skip();

test('ThirdSundayOfApril2013', function () {
    expect(Meetup::day(2013, '4', 'third', 'Sunday'))
        ->toBe(new DateTimeImmutable('2013/4/21'));
})->skip();

test('FourthMondayOfMarch2013', function () {
    expect(Meetup::day(2013, '3', 'fourth', 'Monday'))
        ->toBe(new DateTimeImmutable('2013/3/25'));
})->skip();

test('FourthMondayOfApril2013', function () {
    expect(Meetup::day(2013, '4', 'fourth', 'Monday'))
        ->toBe(new DateTimeImmutable('2013/4/22'));
})->skip();

test('FourthTuesdayOfMay2013', function () {
    expect(Meetup::day(2013, '5', 'fourth', 'Tuesday'))
        ->toBe(new DateTimeImmutable('2013/5/28'));
})->skip();

test('FourthTuesdayOfJune2013', function () {
    expect(Meetup::day(2013, '6', 'fourth', 'Tuesday'))
        ->toBe(new DateTimeImmutable('2013/6/25'));
})->skip();

test('FourthWednesdayOfJuly2013', function () {
    expect(Meetup::day(2013, '7', 'fourth', 'Wednesday'))
        ->toBe(new DateTimeImmutable('2013/7/24'));
})->skip();

test('FourthWednesdayOfAugust2013', function () {
    expect(Meetup::day(2013, '8', 'fourth', 'Wednesday'))
        ->toBe(new DateTimeImmutable('2013/8/28'));
})->skip();

test('FourthThursdayOfSeptember2013', function () {
    expect(Meetup::day(2013, '9', 'fourth', 'Thursday'))
        ->toBe(new DateTimeImmutable('2013/9/26'));
})->skip();

test('FourthThursdayOfOctober2013', function () {
    expect(Meetup::day(2013, '10', 'fourth', 'Thursday'))
        ->toBe(new DateTimeImmutable('2013/10/24'));
})->skip();

test('FourthFridayOfNovember2013', function () {
    expect(Meetup::day(2013, '11', 'fourth', 'Friday'))
        ->toBe(new DateTimeImmutable('2013/11/22'));
})->skip();

test('FourthFridayOfDecember2013', function () {
    expect(Meetup::day(2013, '12', 'fourth', 'Friday'))
        ->toBe(new DateTimeImmutable('2013/12/27'));
})->skip();

test('FourthSaturdayOfJanuary2013', function () {
    expect(Meetup::day(2013, '1', 'fourth', 'Saturday'))
        ->toBe(new DateTimeImmutable('2013/1/26'));
})->skip();

test('FourthSaturdayOfFebruary2013', function () {
    expect(Meetup::day(2013, '2', 'fourth', 'Saturday'))
        ->toBe(new DateTimeImmutable('2013/2/23'));
})->skip();

test('FourthSundayOfMarch2013', function () {
    expect(Meetup::day(2013, '3', 'fourth', 'Sunday'))
        ->toBe(new DateTimeImmutable('2013/3/24'));
})->skip();

test('FourthSundayOfApril2013', function () {
    expect(Meetup::day(2013, '4', 'fourth', 'Sunday'))
        ->toBe(new DateTimeImmutable('2013/4/28'));
})->skip();

test('LastMondayOfMarch2013', function () {
    expect(Meetup::day(2013, '3', 'last', 'Monday'))
        ->toBe(new DateTimeImmutable('2013/3/25'));
})->skip();

test('LastMondayOfApril2013', function () {
    expect(Meetup::day(2013, '4', 'last', 'Monday'))
        ->toBe(new DateTimeImmutable('2013/4/29'));
})->skip();

test('LastTuesdayOfMay2013', function () {
    expect(Meetup::day(2013, '5', 'last', 'Tuesday'))
        ->toBe(new DateTimeImmutable('2013/5/28'));
})->skip();

test('LastTuesdayOfJune2013', function () {
    expect(Meetup::day(2013, '6', 'last', 'Tuesday'))
        ->toBe(new DateTimeImmutable('2013/6/25'));
})->skip();

test('LastWednesdayOfJuly2013', function () {
    expect(Meetup::day(2013, '7', 'last', 'Wednesday'))
        ->toBe(new DateTimeImmutable('2013/7/31'));
})->skip();

test('LastWednesdayOfAugust2013', function () {
    expect(Meetup::day(2013, '8', 'last', 'Wednesday'))
        ->toBe(new DateTimeImmutable('2013/8/28'));
})->skip();

test('LastThursdayOfSeptember2013', function () {
    expect(Meetup::day(2013, '9', 'last', 'Thursday'))
        ->toBe(new DateTimeImmutable('2013/9/26'));
})->skip();

test('LastThursdayOfOctober2013', function () {
    expect(Meetup::day(2013, '10', 'last', 'Thursday'))
        ->toBe(new DateTimeImmutable('2013/10/31'));
})->skip();

test('LastFridayOfNovember2013', function () {
    expect(Meetup::day(2013, '11', 'last', 'Friday'))
        ->toBe(new DateTimeImmutable('2013/11/29'));
})->skip();

test('LastFridayOfDecember2013', function () {
    expect(Meetup::day(2013, '12', 'last', 'Friday'))
        ->toBe(new DateTimeImmutable('2013/12/27'));
})->skip();

test('LastSaturdayOfJanuary2013', function () {
    expect(Meetup::day(2013, '1', 'last', 'Saturday'))
        ->toBe(new DateTimeImmutable('2013/1/26'));
})->skip();

test('LastSaturdayOfFebruary2013', function () {
    expect(Meetup::day(2013, '2', 'last', 'Saturday'))
        ->toBe(new DateTimeImmutable('2013/2/23'));
})->skip();

test('LastSundayOfMarch2013', function () {
    expect(Meetup::day(2013, '3', 'last', 'Sunday'))
        ->toBe(new DateTimeImmutable('2013/3/31'));
})->skip();

test('LastSundayOfApril2013', function () {
    expect(Meetup::day(2013, '4', 'last', 'Sunday'))
        ->toBe(new DateTimeImmutable('2013/4/28'));
})->skip();

test('LastWednesdayOfFebruary2012', function () {
    expect(Meetup::day(2012, '2', 'last', 'Wednesday'))
        ->toBe(new DateTimeImmutable('2012/2/29'));
})->skip();

test('LastWednesdayOfDecember2014', function () {
    expect(Meetup::day(2014, '12', 'last', 'Wednesday'))
        ->toBe(new DateTimeImmutable('2014/12/31'));
})->skip();

test('LastSundayOfFebruary2015', function () {
    expect(Meetup::day(2015, '2', 'last', 'Sunday'))
        ->toBe(new DateTimeImmutable('2015/2/22'));
})->skip();

test('FirstFridayOfDecember2012', function () {
    expect(Meetup::day(2012, '12', 'first', 'Friday'))
        ->toBe(new DateTimeImmutable('2012/12/7'));
})->skip();
