<?php

require_once 'lightableInterface.php';

class Car extends Vehicle implements LightableInterface
{

    /**
     * @var bool
     */
    private $hasParkBrake;


    public function __construct(string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }

    public function getParkBrake()
    {
        return $this->hasParkBrake;
    }

    public function setParkBrake(bool $hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function start()
    {
        if ($this->getParkBrake() === true) {
            throw new Exception('Tu as pensé au frein à main ?');
        }
        return "Let's start !" . "<br>";
    }

    public function switchOn()
    {
        return 'True';
    }

    public function switchOff()
    {
        return 'False';
    }
}
