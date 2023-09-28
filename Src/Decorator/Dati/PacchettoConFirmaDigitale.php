<?php

namespace php\Decorator\Dati;

use php\Interface\PacchettoDati;

class PacchettoConFirmaDigitale implements PacchettoDati
{
    private PacchettoDati $dati;

    public function __construct(PacchettoDati $dati)
    {
        $this->dati = $dati;
    }

    public function leggiDati($key): string
    {
        return $this->dati->leggiDati($key);
    }

    public function scriviDatti(string $key, string $value): void
    {
        $this->dati->scriviDatti($key, $value);
    }
}