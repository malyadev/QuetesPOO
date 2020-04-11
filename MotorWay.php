<?php

// MotorWay.php

final class MotorWay extends HighWay
{
    protected $nbLanes = 4;
    protected $maxSpeed = 130;

    public function addVehicule(Vehicule $Vehicule)
    {
        if ($Vehicule instanceof Car || $Vehicule instanceof Truck ) {
            $this->currentVehicules[]= $Vehicule;
            echo 'Alrigh, you can move';
        }else {
            echo 'Your vehicle is forbiden, go away sir';
        }    }
}