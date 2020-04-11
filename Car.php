<?php

require_once 'Vehicule.php';

class Car extends Vehicule
{
    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function moveForward()
    {
        $this->currentSpeed = 125;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->setEnergy($energy);
        }
        return $this;
    }


    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}

// Code gardé car ces méthodes sont bien plus rigolotes lol no delete please

/* public function turnOn()
{
    $this->setEnergyLevel = 100;
    return "Vroom... </br></br>";
}


 public function brakecar(): string
{
    $sentence = "</br>SH*T THE COPS</br>";
    while ($this->setCurrentSpeed > 0) {
        $this->setEnergyLevel -= 10;
        $this->setCurrentSpeed -= 15;
        if ($this->setCurrentSpeed !== 0 ){
            $sentence .= 'BRAKE !!! '.$this->setCurrentSpeed.'km/h,'.'</br>'.$this->setEnergyLevel.'% réservoir'.'</br></br>';
        }
    }
    $sentence .= $this->setCurrentSpeed.'km/h,'. ' oof i\'m stopped..';
    return $sentence;
}*/