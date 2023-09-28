<?php

namespace php\Decorator\Geometry;

use php\Interface\Geometry\FiguraGeometrica;

class FormaConBordo implements FiguraGeometrica
{
    public FiguraGeometrica $figuraGeometrica;

    public function __construct(FiguraGeometrica $figuraGeometrica)
    {
        $this->figuraGeometrica = $figuraGeometrica;
    }

    public function area(): int|float
    {
        return $this->figuraGeometrica->area();
    }

    public function perimetro(): float|int
    {
        return $this->figuraGeometrica->perimetro();
    }

    public function disegna(): string
    {
        return "Adesso questa figura geometrica ha l'ombra";
    }
}