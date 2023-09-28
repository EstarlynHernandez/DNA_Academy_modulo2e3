<?php

namespace php\Class\Product;

class ElectronicProduct extends Product
{
    private string $material;

    public function __construct(int $price, string $name)
    {
        parent::__construct($price, $name);
    }

    public function getMaterial(): string
    {
        return $this->material;
    }

    public function setMaterial(string $material): void
    {
        $this->material = $material;
    }
}