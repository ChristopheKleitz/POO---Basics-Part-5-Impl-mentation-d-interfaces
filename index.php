<?php

require_once 'vehicle.php';
require_once 'car.php';
require_once 'bicycle.php';
require_once 'skateboard.php';
require_once 'lightableInterface.php';

$car = new Car('pink', 4);
var_dump($car);
echo $car->switchOn()."<br>";
echo $car->switchOff()."<br><hr><br>";

$bike = new Bicycle('blue');
var_dump($bike);
echo $bike->switchOn()."<br>";
echo $bike->switchOff()."<br>";
$bike->setCurrentSpeed(15);
var_dump($bike);
echo $bike->switchOn()."<br>";
echo $bike->switchOff()."<br><hr><br>";

$skate = new Skateboard('black');
var_dump($skate);
