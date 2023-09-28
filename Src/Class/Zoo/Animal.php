<?php

namespace php\Class\Zoo;

class Animal
{
    private string $nome;
    private string $dieta;
    private string $specie;

    public function __construct($dieta, $nome, $specie)
    {
        $this->setDieta($dieta);
        $this->setNome($nome);
        $this->setSpecie($specie);
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getDieta(): string
    {
        return $this->dieta;
    }

    public function setDieta(string $dieta): void
    {
        $this->dieta = $dieta;
    }

    public function getSpecie(): string
    {
        return $this->specie;
    }

    public function setSpecie(string $specie): void
    {
        $this->specie = $specie;
    }
}