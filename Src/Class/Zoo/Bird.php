<?php

namespace php\Class\Zoo;

class Bird extends Animal
{
    public function __construct($dieta, $nome, $specie)
    {
        parent::__construct($dieta, $nome, $specie);
    }

    public function fly(): string
    {
        return "Il\La " . parent::getNome() . " sta volando";
    }
}