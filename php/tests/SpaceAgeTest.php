<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/space-age/SpaceAgeTest.php

namespace Tests;

use App\SpaceAge;

const DELTA = 0.01;

test('AgeInSeconds', function () {
    $age = new SpaceAge(1000000);

    $this->assertEquals(1000000, $age->seconds());
})->skip();

test('AgeOnEarth', function () {
    $age = new SpaceAge(1000000000);

    $this->assertEqualsWithDelta(31.69, $age->earth(), self::DELTA);
})->skip();

test('AgeOnMercury', function () {
    $age = new SpaceAge(2134835688);

    $this->assertEqualsWithDelta(280.88, $age->mercury(), self::DELTA);
})->skip();

test('AgeOnVenus', function () {
    $age = new SpaceAge(189839836);

    $this->assertEqualsWithDelta(9.78, $age->venus(), self::DELTA);
})->skip();

test('AgeOnMars', function () {
    $age = new SpaceAge(2329871239);

    $this->assertEqualsWithDelta(39.25, $age->mars(), self::DELTA);
})->skip();

test('AgeOnJupiter', function () {
    $age = new SpaceAge(901876382);

    $this->assertEqualsWithDelta(2.41, $age->jupiter(), self::DELTA);
})->skip();

test('AgeOnSaturn', function () {
    $age = new SpaceAge(3000000000);

    $this->assertEqualsWithDelta(3.23, $age->saturn(), self::DELTA);
})->skip();

test('AgeOnUranus', function () {
    $age = new SpaceAge(3210123456);

    $this->assertEqualsWithDelta(1.21, $age->uranus(), self::DELTA);
})->skip();

test('AgeOnNeptune', function () {
    $age = new SpaceAge(8210123456);

    $this->assertEqualsWithDelta(1.58, $age->neptune(), self::DELTA);
})->skip();
