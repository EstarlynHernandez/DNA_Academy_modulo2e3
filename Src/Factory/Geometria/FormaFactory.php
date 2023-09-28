<?php

namespace php\Factory\Geometria;

use php\Class\Geometry\Cerchio;
use php\Class\Geometry\Cubo;
use php\Class\Geometry\Quadrato;
use php\Class\Geometry\Sfera;
use php\Class\Geometry\Triangolo;

class FormaFactory
{
    public static function getGeometricForm($forma): Cubo|Sfera|Quadrato|Triangolo|Cerchio
    {
        return match (strtolower($forma)) {
            'circle'    => new Cerchio(),
            'quadrato'  => new Quadrato(),
            'triangolo' => new Triangolo(),
            'cubo' => new Cubo(),
            'sfera' => new Sfera(),
        };
    }
}