<?php

namespace php\Class\FoodAndDrink;

class Coffee extends FoodAndDrink
{
    private string $coffeeType;
    private string $origin;
    private string $base = 'coffee';

    public function __construct(string $coffeeType, string $origin = 'standard')
    {
        parent::__construct('drink', ['coffee', 'water']);
        $this->coffeeType = $coffeeType;
        $this->origin = $origin;
    }

    public function getCoffeeType(): string
    {
        return $this->coffeeType;
    }

    public function setCoffeeType(string $coffeeType): void
    {
        $this->coffeeType = $coffeeType;
    }

    public function getOrigin(): string
    {
        return $this->origin;
    }

    public function setOrigin(string $origin): void
    {
        $this->origin = $origin;
    }
}