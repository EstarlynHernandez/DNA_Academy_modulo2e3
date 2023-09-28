<?php

namespace php\Class\Geometry;

use php\Interface\Geometry\FiguraGeometrica;

class Triangolo implements FiguraGeometrica
{
    public int $lato = 0;
    public int $altezza = 0;
    public int $base = 0;

    /**
     * @param int $lato
     * @param int $altezza
     * @param int $base
     */
    public function __construct(int $lato, int $altezza, int $base)
    {
        $this->lato = $lato;
        $this->altezza = $altezza;
        $this->base = $base;
    }

    public function area(): int|float
    {
        return ($this->base * $this->altezza) / 2;
    }

    public function perimetro(): float|int
    {
        return $this->lato * 3;
    }

    public function disegna(): string
    {
        return "No e possibile disegnare";
    }
}