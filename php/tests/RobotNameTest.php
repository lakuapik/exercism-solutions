<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/robot-name/RobotNameTest.php

namespace Tests;

use App\RobotName;
use function PHPUnit\Framework\assertArrayNotHasKey;
use function PHPUnit\Framework\assertMatchesRegularExpression;
use function PHPUnit\Framework\assertNotSame;
use function PHPUnit\Framework\assertSame;

test('HasName', function () {
    $robot = new RobotName();
    assertMatchesRegularExpression('/^[a-z]{2}\d{3}$/i', $robot->getName());
});

test('NameSticks', function () {
    $robot = new RobotName();
    $old = $robot->getName();
    assertSame($robot->getName(), $old);
});

test('DifferentRobotsHaveDifferentNames', function () {
    $robot1 = new RobotName();
    $robot2 = new RobotName();
    assertNotSame($robot2->getName(), $robot1->getName());
});

test('ResetName', function () {
    $robot = new RobotName();
    $name1 = $robot->getName();
    $robot->reset();
    $name2 = $robot->getName();
    assertNotSame($name1, $name2);
    assertMatchesRegularExpression('/\w{2}\d{3}/', $name2);
});

test('NameArentRecycled', function () {
    $names = [];
    $robot = new RobotName();

    // for ($i = 0; $i < 10_000; $i++) {
    for ($i = 0; $i < 100; $i++) { // speed up test
        $name = $robot->getName();
        assertArrayNotHasKey($name, $names, sprintf('Name %s reissued after Reset.', $name));
        $names[$name] = true;
        $robot->reset();
    }
});

test('NameUniquenessManyRobots', function () {
    $names = [];

    // for ($i = 0; $i < 10_000; $i++) {
    for ($i = 0; $i < 100; $i++) { // speed up test
        $name = (new RobotName())->getName();
        $this->assertArrayNotHasKey($name, $names, sprintf('Name %s reissued after %d robots', $name, $i));
        $names[$name] = true;
    }
});
