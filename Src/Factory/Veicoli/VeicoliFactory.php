<?php

namespace php\Factory\Veicoli;

use php\Class\Vehicles\Automobili;
use php\Class\Vehicles\Camion;
use php\Class\Vehicles\Moto;

class VeicoliFactory
{
    public static function create($tipoVeicolo)
    {
        $tipoVeicolo = strtolower($tipoVeicolo);
        switch ($tipoVeicolo) {
            case "auto":
                return new Automobili();
            case "moto":
                return new Moto();
            case "camion":
                return new Camion();
        }
    }
}