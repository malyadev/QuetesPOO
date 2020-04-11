<?php
require_once 'Vehicule.php';

class Truck extends Vehicule
{

    /**
     * @var int
     */
    protected $capacity;

    /**
     * @var int
     */
    protected $load;

    public function __construct(string $color, int $nbSeats, string $energy, int $capacity, int $load)
    {
        parent::__construct($color, $nbSeats, $energy);
        $this->capacity = $capacity;
        $this->load = $load;
    }

    public function loading(): string
    {
        $statut = '';
        if ($this->load === $this->capacity) {
            $statut = 'Full';
        }elseif ($this->load < $this->capacity ) {
            $statut = 'in filling';
        }
        return $statut;
    }

    public function moveForward()
    {
        $this->currentSpeed = 50;
    }

    /**
     * @return int
     */
    public function getCapacity(): int
    {
        return $this->capacity;
    }

    /**
     * @param int $capacity
     */
    public function setCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }

    /**
     * @return int
     */
    public function getLoad(): int
    {
        return $this->load;
    }

    /**
     * @param int $load
     */
    public function setLoad(int $load): void
    {
        $this->load = $load;
    }
}
