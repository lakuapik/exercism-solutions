<?php

namespace App;

/**
 * @see https://exercism.org/tracks/php/exercises/robot-simulator
 */
class RobotSimulator
{
    /**
     * @var int[]
     */
    protected $position;

    /**
     * @var string
     */
    protected $direction;

    public const DIRECTION_NORTH = 1;
    public const DIRECTION_EAST  = 2;
    public const DIRECTION_SOUTH = 3;
    public const DIRECTION_WEST  = 4;

    public function __construct(array $position, string $direction)
    {
        throw new \BadMethodCallException('Implement the __construct method');
    }

    public function turnRight(): self
    {
        throw new \BadMethodCallException('Implement the turnRight method');
    }

    public function turnLeft(): self
    {
        throw new \BadMethodCallException('Implement the turnLeft method');
    }

    public function advance(): self
    {
        throw new \BadMethodCallException('Implement the advance method');
    }

    public function instructions(): self
    {
        throw new \BadMethodCallException('Implement the instructions method');
    }
}
