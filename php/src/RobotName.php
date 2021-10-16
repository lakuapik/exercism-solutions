<?php

namespace App;

/**
 * @see https://exercism.org/tracks/php/exercises/robot-name
 */
class RobotName
{
    private $name;

    private $generatedNames = [];

    public function __construct()
    {
        $this->reset();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function reset(): void
    {
        while (true) {
            $name = chr(rand(65, 90)) . chr(rand(65, 90));
            $name .= str_pad(rand(0, 999), 3, '0');

            if (!in_array($name, $this->generatedNames)) {
                $this->name             = $name;
                $this->generatedNames[] = $name;
                break;
            }
        }
    }
}
