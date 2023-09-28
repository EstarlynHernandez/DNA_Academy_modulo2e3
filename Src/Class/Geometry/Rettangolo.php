<?php

namespace php\Class\Geometry;

use php\Interface\Geometry\FiguraGeometrica;

class Rettangolo implements FiguraGeometrica
{
    public int $base = 0;
    public int $altezza = 0;

    /**
     * @param int $base
     * @param int $altezza
     */
    public function __construct(int $base, int $altezza)
    {
        $this->base = $base;
        $this->altezza = $altezza;
    }

    public function area(): int|float
    {
        return $this->base * $this->altezza;
    }

    public function perimetro(): float|int
    {
        return ($this->base + $this->altezza) * 2;
    }

    public function disegna(): string
    {
        return "No e possibile disegnare";
    }
}