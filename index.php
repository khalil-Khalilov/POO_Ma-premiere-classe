<?php
require('car.php');


$porsche = new Car('black', 4);
$bugatti = new Car('blue', 2);
$lamborghini = new Car('yellow', 2);


// Moving car
echo $porsche->start();
echo $porsche->forward();
echo '<br> Vitesse de la voiture : ' . $porsche->getCurrentSpeed() . ' km/h' . '<br>';
echo $porsche->brake();
echo '<br> Vitesse de la voiture : ' . $porsche->getCurrentSpeed() . ' km/h' . '<br>';
echo $porsche->brake();