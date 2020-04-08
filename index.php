<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);
$benz=new Truck(50,'red',3,'electric',15);
echo $benz->forward();
echo $benz->brake();
echo $benz->isFull();
var_dump($benz);
$benz=new Truck(50,'red',3,'electric',200);
echo $benz->forward();
echo $benz->brake();
echo $benz->isFull();
var_dump($benz);