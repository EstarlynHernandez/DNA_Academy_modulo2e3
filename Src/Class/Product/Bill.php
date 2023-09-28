<?php

namespace php\Class\Product;

class Bill
{
    private array $products = [];

    public function bill(): int
    {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }

        return $total;
    }

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
    }

    public function getProducts(): array
    {
        return $this->products;
    }
}