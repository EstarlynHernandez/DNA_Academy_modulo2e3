<?php

namespace php\Interface\Geometry;

interface FiguraGeometrica
{
    public function area(): int|float;

    public function perimetro(): int|float;

    public function disegna();
}
