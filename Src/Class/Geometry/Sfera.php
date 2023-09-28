<?php

namespace php\Class\Geometry;

use php\Interface\Geometry\FiguraGeometrica;

class Sfera implements FiguraGeometrica
{
    public int $raggio;

    /**
     * @param int $raggio
     */
    public function __construct(int $raggio)
    {
        $this->raggio = $raggio;
    }

    public function volume(): int
    {
        return 4/3 * pi() * ($this->raggio ** 3);
    }

    public function area(): int|float
    {
        return 4 . pi() . ($this->raggio ** 2);
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