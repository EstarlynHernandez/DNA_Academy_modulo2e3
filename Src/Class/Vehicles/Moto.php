<?php

namespace php\Class\Vehicles;

class Moto extends Veicoli
{
    private bool $casco;
    private string $sospensioni;

    public function __construct($marca = 'not found', $modello = 'unknown', $velocitaMassima = 0, $sospensioni = 'normali')
    {
        parent::__construct($marca, $modello, $velocitaMassima);
    }

    public function isCasco(): bool
    {
        return $this->casco;
    }

    public function setCasco(bool $casco): void
    {
        $this->casco = $casco;
    }

    public function getSospensioni(): string
    {
        return $this->sospensioni;
    }

    public function setSospensioni(string $sospensioni): void
    {
        $this->sospensioni = $sospensioni;
    }

}