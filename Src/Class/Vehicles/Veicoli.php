<?php

namespace php\Class\Vehicles;

use php\Interface\Veicoli\VeicoliInterface;

class Veicoli implements VeicoliInterface
{
    private string $marca;
    private string $modello;
    private int $velocitaMassima;
    private int $velocita = 0;

    public static int $seven = 7;

    public function __construct($marca, $modello, $velocitaMassima)
    {
        $this->setMarca($marca);
        $this->setModello($modello);
        $this->setVelocitaMassima($velocitaMassima);
    }

    public function accelera(): void
    {
        if ($this->velocitaMassima > $this->velocita)
            $this->velocita += $this->velocitaMassima * 0.10;
    }

    public function frena(): void
    {
        $this->velocita = 0;
    }

    public function getVelocita(): int
    {
        return $this->velocita;
    }

    public function isMove(): bool
    {
        return $this->velocita != 0;
    }

    public function getVelocitaMassima(): int
    {
        return $this->velocitaMassima;
    }

    public function setVelocitaMassima(int $velocitaMassima): void
    {
        $this->velocitaMassima = $velocitaMassima;
    }

    public function getModello(): string
    {
        return $this->modello;
    }

    public function setModello(string $modello): void
    {
        $this->modello = $modello;
    }

    public function getMarca(): string
    {
        return $this->marca;
    }

    public function setMarca(string $marca): void
    {
        $this->marca = $marca;
    }

}
