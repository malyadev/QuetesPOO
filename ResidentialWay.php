<?php

// ResidentialWay.php

final class ResidentialWay extends HighWay
{
    protected $nbLanes = 2;
    protected $maxSpeed = 50;

    public function addVehicule(Vehicule $Vehicule)
    {
        if ($Vehicule instanceof Vehicule ) {
            $this->currentVehicules[]= $Vehicule;
            echo 'Alrigh, you can move';
        }else {
            echo 'Your vehicle is forbiden, go away sir';
        }    }
}