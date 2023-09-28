<?php

namespace php\Decorator\Dati;

use php\Interface\PacchettoDati;

class PacchettoCifrato implements PacchettoDati
{
    private PacchettoDati $dati;

    public function __construct(PacchettoDati $dati)
    {
        $this->dati = $dati;
    }

    public function leggiDati($key): string
    {
        return base64_decode($this->dati->leggiDati($key));
    }

    public function scriviDatti(string $key, string $value): void
    {
        $this->dati->scriviDatti($key, base64_encode($value));
    }
}