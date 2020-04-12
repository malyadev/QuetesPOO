<?php

require_once 'Car.php';
require_once 'Bike.php';
require_once 'Truck.php';
require_once 'Skateboard.php';

require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

//instantiation des voies de circulation
$D2020 = new MotorWay();
$sidewalk = new PedestrianWay();
$OxfordStreet = new ResidentialWay();

//instanciation des véhicules
$bicycle = new Bike('blue', 1);
$truck = new Truck('blue', 4,'fuel', 100, 100);
$skateboard = new Skateboard('grey', 0);
$MacLaren = new Car('redwhine', 5, 'fuel');


//instanciation des méthodes
$MacLaren->setParkBrake(true);
var_dump($MacLaren);

try {
    $MacLaren->start();
} catch (Exception $e) {
    echo $e->getMessage().'<br>';
    $MacLaren->setParkBrake(false);
}finally {
    echo 'Ma voiture roule comme un donut haha (in english please...)';
}
var_dump($MacLaren->getHasParkBrake());
