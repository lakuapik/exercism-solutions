<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/robot-simulator/RobotSimulatorTest.php

namespace Tests;

use App\RobotSimulator;

/*
 * A robot is created with a position and a direction
 */
test('Create', function () {
    // Robots are created with a position and direction
    $robot = new RobotSimulator([0, 0], RobotSimulator::DIRECTION_NORTH);
    $this->assertEquals([0, 0], $robot->position);
    $this->assertEquals(RobotSimulator::DIRECTION_NORTH, $robot->direction);

    // Negative positions are allowed
    $robot = new RobotSimulator([-1, -1], RobotSimulator::DIRECTION_SOUTH);
    $this->assertEquals([-1, -1], $robot->position);
    $this->assertEquals(RobotSimulator::DIRECTION_SOUTH, $robot->direction);
})->skip();

/*
 * Rotate the robot's direction 90 degrees clockwise
 */
test('TurnRight', function () {
    $robot = new RobotSimulator([0, 0], RobotSimulator::DIRECTION_NORTH);

    // Change the direction from north to east
    $robot->turnRight();
    $this->assertEquals([0, 0], $robot->position);
    $this->assertEquals(RobotSimulator::DIRECTION_EAST, $robot->direction);

    // Change the direction from east to south
    $robot->turnRight();
    $this->assertEquals([0, 0], $robot->position);
    $this->assertEquals(RobotSimulator::DIRECTION_SOUTH, $robot->direction);

    // Change the direction from south to west
    $robot->turnRight();
    $this->assertEquals([0, 0], $robot->position);
    $this->assertEquals(RobotSimulator::DIRECTION_WEST, $robot->direction);

    // Change the direction from west to north
    $robot->turnRight();
    $this->assertEquals([0, 0], $robot->position);
    $this->assertEquals(RobotSimulator::DIRECTION_NORTH, $robot->direction);
})->skip();

/*
 * Rotate the robot's direction 90 degrees counterclockwise
 */
test('TurnLeft', function () {
    $robot = new RobotSimulator([0, 0], RobotSimulator::DIRECTION_NORTH);

    // Change the direction from north to west
    $robot->turnLeft();
    $this->assertEquals([0, 0], $robot->position);
    $this->assertEquals(RobotSimulator::DIRECTION_WEST, $robot->direction);

    // Change the direction from west to south
    $robot->turnLeft();
    $this->assertEquals([0, 0], $robot->position);
    $this->assertEquals(RobotSimulator::DIRECTION_SOUTH, $robot->direction);

    // Change the direction from south to east
    $robot->turnLeft();
    $this->assertEquals([0, 0], $robot->position);
    $this->assertEquals(RobotSimulator::DIRECTION_EAST, $robot->direction);

    // Change the direction from east to north
    $robot->turnLeft();
    $this->assertEquals([0, 0], $robot->position);
    $this->assertEquals(RobotSimulator::DIRECTION_NORTH, $robot->direction);
})->skip();

/*
 * Move the robot forward 1 space in the direction it is pointing
 */
test('Advance', function () {
    // Increases the y coordinate by one when facing north
    $robot = new RobotSimulator([0, 0], RobotSimulator::DIRECTION_NORTH);
    $robot->advance();
    $this->assertEquals([0, 1], $robot->position);
    $this->assertEquals(RobotSimulator::DIRECTION_NORTH, $robot->direction);

    // Decreases the y coordinate by one when facing south
    $robot = new RobotSimulator([0, 0], RobotSimulator::DIRECTION_SOUTH);
    $robot->advance();
    $this->assertEquals([0, -1], $robot->position);
    $this->assertEquals(RobotSimulator::DIRECTION_SOUTH, $robot->direction);

    // Increases the x coordinate by one when facing east
    $robot = new RobotSimulator([0, 0], RobotSimulator::DIRECTION_EAST);
    $robot->advance();
    $this->assertEquals([1, 0], $robot->position);
    $this->assertEquals(RobotSimulator::DIRECTION_EAST, $robot->direction);

    // Decreases the x coordinate by one when facing west
    $robot = new RobotSimulator([0, 0], RobotSimulator::DIRECTION_WEST);
    $robot->advance();
    $this->assertEquals([-1, 0], $robot->position);
    $this->assertEquals(RobotSimulator::DIRECTION_WEST, $robot->direction);
})->skip();

/*
 * Where R = Turn Right, L = Turn Left and A = Advance,
 * the robot can follow a series of instructions
 * and end up with the correct position and direction
 */
test('Instructions', function () {
    // Instructions to move west and north
    $robot = new RobotSimulator([0, 0], RobotSimulator::DIRECTION_NORTH);
    $robot->instructions('LAAARALA');
    $this->assertEquals([-4, 1], $robot->position);
    $this->assertEquals(RobotSimulator::DIRECTION_WEST, $robot->direction);

    // Instructions to move west and south
    $robot = new RobotSimulator([2, -7], RobotSimulator::DIRECTION_EAST);
    $robot->instructions('RRAAAAALA');
    $this->assertEquals([-3, -8], $robot->position);
    $this->assertEquals(RobotSimulator::DIRECTION_SOUTH, $robot->direction);

    // Instructions to move east and north
    $robot = new RobotSimulator([8, 4], RobotSimulator::DIRECTION_SOUTH);
    $robot->instructions('LAAARRRALLLL');
    $this->assertEquals([11, 5], $robot->position);
    $this->assertEquals(RobotSimulator::DIRECTION_NORTH, $robot->direction);
})->skip();

test('MalformedInstructions', function () {
    $this->expectException(InvalidArgumentException::class);

    $robot = new RobotSimulator([0, 0], RobotSimulator::DIRECTION_NORTH);
    $robot->instructions('LARX');
})->skip();

/*
 * Optional instructions chaining
 */
test('InstructionsChaining', function () {
    $robot = new RobotSimulator([0, 0], RobotSimulator::DIRECTION_NORTH);
    $robot->turnLeft()
        ->advance()
        ->advance()
        ->advance()
        ->turnRight()
        ->advance()
        ->turnLeft()
        ->advance();
    $this->assertEquals([-4, 1], $robot->position);
    $this->assertEquals(RobotSimulator::DIRECTION_WEST, $robot->direction);
})->skip();
