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
$audi = new Car('redwhine', 5, 'fuel');

$audi->moveForward();
$truck->moveForward();

//instanciation des méthodes
$D2020->addVehicule($audi);
var_dump($D2020);

$sidewalk->addVehicule($skateboard);
var_dump($sidewalk);

$OxfordStreet->addVehicule($bicycle);
var_dump($OxfordStreet);

$sidewalk->addVehicule($truck);
var_dump($sidewalk);

