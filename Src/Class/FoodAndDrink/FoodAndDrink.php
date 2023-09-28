<?php

namespace php\Class\FoodAndDrink;

class FoodAndDrink
{
    private string $type;
    private array $ingredients;

    public function __construct(string $type, array $ingredients)
    {
        $this->type = $type;
        $this->ingredients = $ingredients;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getIngredients(): array
    {
        return $this->ingredients;
    }

    public function setIngredients(array $ingredients): void
    {
        $this->ingredients = $ingredients;
    }

    public function setIngredient(string $ingredient): void
    {
        $this->ingredients[] = $ingredient;
    }
}