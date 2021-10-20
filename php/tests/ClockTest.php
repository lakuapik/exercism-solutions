<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/clock/ClockTest.php

namespace Tests;

use App\Clock;

test('OnTheHour', function () {
    expect(new Clock(8))->asStringToBe('08:00');
});

// test('PastTheHour', function() {

// })->skip();
//     expect(new Clock(11, 9);

//     $this->assertEquals('11:09', $clock->__toString());
// }

// test('AddingAFewMinutes', function() {

// })->skip();
//     expect(new Clock(10);

//     $clock = $clock->add(3);

//     $this->assertEquals('10:03', $clock->__toString());
// }

// test('AddingZeroMinutes', function() {

// })->skip();
//     expect(new Clock(6, 41);

//     $clock = $clock->add(0);

//     $this->assertEquals('06:41', $clock->__toString());
// }

// test('AddingOverAnHour', function() {

// })->skip();
//     expect(new Clock(10);

//     $clock = $clock->add(61);

//     $this->assertEquals('11:01', $clock->__toString());
// }

// test('AddingMoreThanTwoHoursWithCarry', function() {

// })->skip();
//     expect(new Clock(0, 45);

//     $clock = $clock->add(160);

//     $this->assertEquals('03:25', $clock->__toString());
// }

// test('AddingMoreThanTwoDays', function() {

// })->skip();
//     expect(new Clock(1, 1);

//     $clock = $clock->add(3500);

//     $this->assertEquals('11:21', $clock->__toString());
// }

// test('WrapAroundAtMidnight', function() {

// })->skip();
//     expect(new Clock(23, 30);

//     $clock = $clock->add(60);

//     $this->assertEquals('00:30', $clock->__toString());
// }

// test('SubtractMinutes', function() {

// })->skip();
//     expect(new Clock(10);

//     $clock = $clock->sub(90);

//     $this->assertEquals('08:30', $clock->__toString());
// }

// test('SubtractMoreThanTwoHours', function() {

// })->skip();
//     expect(new Clock(6, 15);

//     $clock = $clock->sub(160);

//     $this->assertEquals('03:35', $clock->__toString());
// }

// test('SubtractMoreThanTwoHoursWithNegativeAdd', function() {

// })->skip();
//     expect(new Clock(6, 15);

//     $clock = $clock->add(-160);

//     $this->assertEquals('03:35', $clock->__toString());
// }

// test('SubtractMoreThanTwoDays', function() {

// })->skip();
//     expect(new Clock(2, 20);

//     $clock = $clock->sub(3000);

//     $this->assertEquals('00:20', $clock->__toString());
// }

// test('WrapAroundBackwards', function() {

// })->skip();
//     expect(new Clock(0, 30);

//     $clock = $clock->sub(60);

//     $this->assertEquals('23:30', $clock->__toString());
// }

// test('WrapAroundDay', function() {

// })->skip();
//     expect(new Clock(5, 32);

//     $clock = $clock->add(25 * 60);

//     $this->assertEquals('06:32', $clock->__toString());
// }

// test('WrapAroundDayBackwards', function() {

// })->skip();
//     expect(new Clock(5, 32);

//     $clock = $clock->sub(25 * 60);

//     $this->assertEquals('04:32', $clock->__toString());
// }

// test('EquivalentClocks', function() {

// })->skip();
//     $this->assertEquals(new Clock(15, 37), new Clock(15, 37));
// }

// test('InequivalentClocks', function() {

// })->skip();
//     $this->assertNotEquals(new Clock(01, 01), new Clock(18, 32));
// }

// test('EquivalentClocksWithHourOverflowBySeveralDays', function() {

// })->skip();
//     $this->assertEquals(new Clock(3, 11), new Clock(99, 11));
// }

// test('EquivalentClocksWithNegativeHour', function() {

// })->skip();
//     $this->assertEquals(new Clock(22, 40), new Clock(-2, 40));
// }

// test('EquivalentClocksWithNegativeHourThatWraps', function() {

// })->skip();
//     $this->assertEquals(new Clock(17, 3), new Clock(-31, 3));
// }

// test('EquivalentClocksWithMinuteOverflowBySeveralDays', function() {

// })->skip();
//     $this->assertEquals(new Clock(2, 2), new Clock(2, 4322));
// }

// test('EquivalentClocksWithNegativeMinuteOverflow', function() {

// })->skip();
//     $this->assertEquals(new Clock(2, 40), new Clock(3, -20));
// }

// test('EquivalentClocksWithNegativeHoursAndMinutes', function() {

// })->skip();
//     $this->assertEquals(new Clock(7, 32), new Clock(-12, -268));
// }

// test('HoursRollOver', function() {

// })->skip();
//     $this->assertEquals('04:00', (new Clock(100))->__toString());
// }

// test('MinutesRollOver', function() {

// })->skip();
//     $this->assertEquals('04:43', (new Clock(0, 1723))->__toString());
// }

// test('HoursAndMinutesRollOver', function() {

// })->skip();
//     $this->assertEquals('00:00', (new Clock(72, 8640))->__toString());
// }

// test('NegativeHoursRollOver', function() {

// })->skip();
//     $this->assertEquals('05:00', (new Clock(-91))->__toString());
// }

// test('NegativeMinutesRollOver', function() {

// })->skip();
//     $this->assertEquals('16:40', (new Clock(1, -4820))->__toString());
// }

// test('NegativeHoursAndMinutesRollOver', function() {

// })->skip();
//     $this->assertEquals('22:10', (new Clock(-121, -5810))->__toString());
// }
