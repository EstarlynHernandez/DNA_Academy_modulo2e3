<?php

namespace php\Class\Zoo;

class Mammal extends Animal
{
    public function __construct($dieta, $nome, $specie)
    {
        parent::__construct($dieta, $nome, $specie);
    }

    public function run(): string
    {
        return "Il\la " . parent::getNome() . " sta correndo";
    }
}