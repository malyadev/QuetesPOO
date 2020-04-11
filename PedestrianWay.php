<?php
// PedestrianWay.php

final class PedestrianWay extends HighWay
{
    protected $nbLanes = 1;
    protected $maxSpeed = 10;

    public function addVehicule(Vehicule $Vehicule)
    {
        if ($Vehicule instanceof Bike || $Vehicule instanceof Skateboard ) {
            $this->currentVehicules[]= $Vehicule;
            echo 'Alrigh, you can move';
        }else {
            echo 'Your vehicle is forbiden, go away sir';
        }
    }
}