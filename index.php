<?php

require_once 'bicycle.php';
require_once 'car.php';
require_once 'vehicle.php' ;



$bicycle = new Bicycle('blue', 1);

echo $bicycle->forward();

var_dump($bicycle);


// Moving bike
echo $bicycle->forward();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed()  . ' km/h' . '<br>';
echo $bicycle->brake();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake() . "<br><br>";


// Instanciation d'un nouvel objet $rockrider

// Instanciation d'un nouvel objet $tornado
$car = new Car('green', 4, 'electric');

echo $car->forward();

var_dump($car);




$car = new Car('red', 5, 'gasoil');
$car->setCurrentSpeed(50);
$car->setEnergyLevel(75);

echo $car->forward();

echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed()  . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
