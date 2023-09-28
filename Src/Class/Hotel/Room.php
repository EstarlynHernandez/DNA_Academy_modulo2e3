<?php

namespace php\Class\Hotel;

class Room
{
    private string $nome;
    private string $hotel;
    private bool $available;

    /**
     * @param string $nome
     * @param string $hotel
     */
    public function __construct(string $nome, string $hotel)
    {
        $this->nome = $nome;
        $this->hotel = $hotel;
        $this->available = true;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getHotel(): string
    {
        return $this->hotel;
    }

    public function setHotel(string $hotel): void
    {
        $this->hotel = $hotel;
    }

    public function isAvailable(): bool
    {
        return $this->available;
    }

    public function setAvailable(bool $disponile): void
    {
        $this->available = $disponile;
    }

}