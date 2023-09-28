<?php

namespace php\Class\Vehicles;

use php\Class\Vehicles\Veicoli;

class Automobili extends Veicoli
{
    private $porte;
    private $passegeri;
    private $baule;

    public function __construct($marca = 'no found', $modello = 'unknown', $passegeri = 1, $velocitaMassima = 0, $porte = 2, $sedili = 1, $baule = false)
    {
        parent::__construct($marca, $modello, $velocitaMassima);

        $this->setPorte($porte);
        $this->setPassegeri($sedili);
        $this->setBaule($baule);
    }

    public function getPorte(): int
    {
        return $this->porte;
    }

    public function setPorte(int $porte): void
    {
        $this->porte = $porte;
    }

    public function getPassegeri(): int
    {
        return $this->passegeri;
    }

    public function setPassegeri(int $passegeri): void
    {
        $this->passegeri = $passegeri;
    }

    public function isBaule(): bool
    {
        return $this->baule;
    }

    public function setBaule(bool $baule): void
    {
        $this->baule = $baule;
    }
}