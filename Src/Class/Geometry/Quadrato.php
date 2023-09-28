<?php

namespace php\Class\Geometry;

use php\Interface\Geometry\FiguraGeometrica;

class Quadrato implements FiguraGeometrica
{
    public int $lato = 0;

    /**
     * @param int $lato
     */
    public function __construct(int $lato)
    {
        $this->lato = $lato;
    }

    public function area(): int|float
    {
        return $this->lato ** 2;
    }

    public function perimetro(): float|int
    {
        return $this->lato * 4;
    }

    public function disegna(): string
    {
        return "No e possibile disegnare";
    }
}