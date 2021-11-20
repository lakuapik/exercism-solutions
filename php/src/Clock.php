<?php

namespace App;

use DateInterval;
use DateTime;

/**
 * @see https://exercism.org/tracks/php/exercises/clock
 */
class Clock
{
    protected $time;

    public function __construct(int $hour, int $minute = 0)
    {
        $this->time = (new DateTime())->setTime($hour, $minute)->setDate(2021, 1, 1);
    }

    public function __toString(): string
    {
        return $this->time->format('H:i');
    }

    public function add($minute = 0): self
    {
        $this->time->add(DateInterval::createFromDateString("{$minute} minute"));
        $this->time->setDate(2021, 1, 1);

        return $this;
    }

    public function sub($minute = 0): self
    {
        $this->time->sub(DateInterval::createFromDateString("{$minute} minute"));
        $this->time->setDate(2021, 1, 1);

        return $this;
    }
}
