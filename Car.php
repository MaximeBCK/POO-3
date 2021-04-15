<?php

require_once 'vehicule.php';

class Car extends vehicule
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];


    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel)
    {
        $this->energyLevel = $energyLevel;
    }
}