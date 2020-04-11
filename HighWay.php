<?php
// HighWay.php

abstract class HighWay
{
    /**
     * @var array
     */
    protected $currentVehicules;

    /**
     * @var int
     */
    protected $nbLanes;

    /**
     * @var int
     */
    protected $maxSpeed;


    // getters and setters

    /**
     * @return array
     */
    public function getCurrentVehicules(): array
    {
        return $this->currentVehicules;
    }

    /**
     * @param array $currentVehicules
     */
    public function setCurrentVehicules(array $currentVehicules): void
    {
        $this->currentVehicules = $currentVehicules;
    }

    /**
     * @return int
     */
    public function getNbLanes(): int
    {
        return $this->nbLanes;
    }

    /**
     * @param int $nbLanes
     */
    public function setNbLanes(int $nbLanes): void
    {
        $this->nbLanes = $nbLanes;
    }

    /**
     * @return int
     */
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    /**
     * @param int $maxSpeed
     */
    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    //methods

    abstract public function addVehicule(Vehicule $vehicule);
}