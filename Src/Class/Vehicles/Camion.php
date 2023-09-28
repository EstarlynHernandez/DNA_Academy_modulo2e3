<?php

namespace php\Class\Vehicles;

class Camion extends Veicoli
{
    private bool $rimorchio;
    private int $capacita;

    public function __construct($marca = 'not found', $modello = 'unknown', $velocitaMassima = 0, $capacita = 0, $rimorchio = false)
    {
        parent::__construct($marca, $modello, $velocitaMassima);
    }

    public function getRimorchio()
    {
        return $this->rimorchio;
    }

    public function setRimorchio($rimorchio): void
    {
        $this->rimorchio = $rimorchio;
    }

    public function getCapacita()
    {
        return $this->capacita;
    }

    public function setCapacita($capacita): void
    {
        $this->capacita = $capacita;
    }
}