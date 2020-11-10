<?php

require_once 'lightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
{
    public function __construct(string $color)
    {
        $this->nbSeats = 1;
        $this->nbWheels = 2;
    }

    public function switchOn()
    {
        if ($this->getCurrentSpeed() >= 10)
        {
            return 'True';
        }
        return "Not fast enough";
    }

    public function switchOff()
    {
        return 'False';
    }
}
