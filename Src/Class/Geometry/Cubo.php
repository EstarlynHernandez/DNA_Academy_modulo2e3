<?php

namespace php\Class\Geometry;

use php\Interface\Geometry\FiguraGeometrica;

class Cubo implements FiguraGeometrica
{
    public int $lato;

    /**
     * @param int $lato
     */
    public function __construct(int $lato)
    {
        $this->lato = $lato;
    }

    public function volume(): int
    {
        return $this->lato ** 3;
    }

    public function area(): int|float
    {
        return 6 * ($this->lato * 2);
    }

    public function perimetro(): int|float
    {
        return 0;
    }

    public function disegna(): string
    {
        return "No e possibile disegnare";
    }
}