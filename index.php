<?php

require 'Bicycle.php';
require 'Car.php';

/* 

$bike = new Bicycle('blue');
$bike->setCurrentSpeed(15);


// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('yellow');

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('black'); 

*/

//Essai de Car
$peugeot = new Car('Bleu', 5, 'Fuel');
echo $peugeot->start() . PHP_EOL;
echo $peugeot->forward() . PHP_EOL;
echo $peugeot->getColor() . PHP_EOL;
echo $peugeot->brake() . PHP_EOL;

