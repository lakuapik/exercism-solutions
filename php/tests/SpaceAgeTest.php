<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/space-age/SpaceAgeTest.php

namespace Tests;

use App\SpaceAge;

test('AgeInSeconds', function () {
    expect(new SpaceAge(1_000_000))
        ->seconds()->toEqual(1_000_000);
});

test('AgeOnEarth', function () {
    expect(new SpaceAge(1_000_000_000))
        ->earth()->toEqualWithDelta(31.69, 0.01);
});

test('AgeOnMercury', function () {
    expect(new SpaceAge(2_134_835_688))
        ->mercury()->toEqualWithDelta(280.88, 0.01);
});

test('AgeOnVenus', function () {
    expect(new SpaceAge(189_839_836))
        ->venus()->toEqualWithDelta(9.78, 0.01);
});

test('AgeOnMars', function () {
    expect(new SpaceAge(2_329_871_239))
        ->mars()->toEqualWithDelta(39.25, 0.01);
});

test('AgeOnJupiter', function () {
    expect(new SpaceAge(901_876_382))
        ->jupiter()->toEqualWithDelta(2.41, 0.01);
});

test('AgeOnSaturn', function () {
    expect(new SpaceAge(3_000_000_000))
        ->saturn()->toEqualWithDelta(3.23, 0.01);
});

test('AgeOnUranus', function () {
    expect(new SpaceAge(3_210_123_456))
        ->uranus()->toEqualWithDelta(1.21, 0.01);
});

test('AgeOnNeptune', function () {
    expect(new SpaceAge(8210123456))
        ->neptune()->toEqualWithDelta(1.58, 0.01);
});
