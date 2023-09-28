<?php

namespace php\Class\Geometry;

use php\Interface\Geometry\FiguraGeometrica;

class Cerchio implements FiguraGeometrica
{
    public int $raggio = 0;

    /**
     * @param int $raggio
     */
    public function __construct(int $raggio)
    {
        $this->raggio = $raggio;
    }

    public function area(): int|float
    {
        return pi() * ($this->raggio ** 2);
    }

    public function perimetro(): float|int
    {
        return pi() * $this->raggio * 2;
    }

    public function disegna()
    {
        return "No e possibile disegnare";
    }
}