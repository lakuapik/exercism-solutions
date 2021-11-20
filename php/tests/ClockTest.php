<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/clock/ClockTest.php

namespace Tests;

use App\Clock;

test('OnTheHour', function () {
    expect((string) new Clock(8))->toBe('08:00');
});

test('PastTheHour', function () {
    expect((string) new Clock(11, 9))->toBe('11:09');
});

test('AddingAFewMinutes', function () {
    expect((string) (new Clock(10))->add(3))->toBe('10:03');
});

test('AddingZeroMinutes', function () {
    expect((string) (new Clock(6, 41))->add(0))->toBe('06:41');
});

test('AddingOverAnHour', function () {
    expect((string) (new Clock(10))->add(61))->toBe('11:01');
});

test('AddingMoreThanTwoHoursWithCarry', function () {
    expect((string) (new Clock(0, 45))->add(160))->toBe('03:25');
});

test('AddingMoreThanTwoDays', function () {
    expect((string) (new Clock(1, 1))->add(3500))->toBe('11:21');
});

test('WrapAroundAtMidnight', function () {
    expect((string) (new Clock(23, 30))->add(60))->toBe('00:30');
});

test('SubtractMinutes', function () {
    expect((string) (new Clock(10))->sub(90))->toBe('08:30');
});

test('SubtractMoreThanTwoHours', function () {
    expect((string) (new Clock(6, 15))->sub(160))->toBe('03:35');
});

test('SubtractMoreThanTwoHoursWithNegativeAdd', function () {
    expect((string) (new Clock(6, 15))->add(-160))->toBe('03:35');
});

test('SubtractMoreThanTwoDays', function () {
    expect((string) (new Clock(2, 20))->sub(3000))->toBe('00:20');
});

test('WrapAroundBackwards', function () {
    expect((string) (new Clock(0, 30))->sub(60))->toBe('23:30');
});

test('WrapAroundDay', function () {
    expect((string) (new Clock(5, 32))->add(25 * 60))->toBe('06:32');
});

test('WrapAroundDayBackwards', function () {
    expect((string) (new Clock(5, 32))->sub(25 * 60))->toBe('04:32');
});

test('EquivalentClocks', function () {
    expect(new Clock(15, 37))->toEqual(new Clock(15, 37));
});

test('InequivalentClocks', function () {
    expect(new Clock(01, 01))->not->toEqual(new Clock(18, 32));
});

test('EquivalentClocksWithHourOverflowBySeveralDays', function () {
    expect(new Clock(3, 11))->toEqual(new Clock(99, 11));
});

test('EquivalentClocksWithNegativeHour', function () {
    expect(new Clock(22, 40))->toEqual(new Clock(-2, 40));
});

test('EquivalentClocksWithNegativeHourThatWraps', function () {
    expect(new Clock(17, 3))->toEqual(new Clock(-31, 3));
});

test('EquivalentClocksWithMinuteOverflowBySeveralDays', function () {
    expect(new Clock(2, 2))->toEqual(new Clock(2, 4322));
});

test('EquivalentClocksWithNegativeMinuteOverflow', function () {
    expect(new Clock(2, 40))->toEqual(new Clock(3, -20));
});

test('EquivalentClocksWithNegativeHoursAndMinutes', function () {
    expect(new Clock(7, 32))->toEqual(new Clock(-12, -268));
});

test('HoursRollOver', function () {
    expect('04:00')->toEqual((string) new Clock(100));
});

test('MinutesRollOver', function () {
    expect('04:43')->toEqual((string) new Clock(0, 1723));
});

test('HoursAndMinutesRollOver', function () {
    expect('00:00')->toEqual((string) new Clock(72, 8640));
});

test('NegativeHoursRollOver', function () {
    expect('05:00')->toEqual((string) new Clock(-91));
});

test('NegativeMinutesRollOver', function () {
    expect('16:40')->toEqual((string) new Clock(1, -4820));
});

test('NegativeHoursAndMinutesRollOver', function () {
    expect('22:10')->toEqual((string) new Clock(-121, -5810));
});
