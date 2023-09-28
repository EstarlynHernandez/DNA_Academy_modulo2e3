<?php

namespace php\Decorator\Dati;

use php\Interface\PacchettoDati;

class PacchettoCompresso implements PacchettoDati
{
    private PacchettoDati $dati;

    public function __construct(PacchettoDati $dati)
    {
        $this->dati = $dati;
    }

    public function leggiDati($key): string
    {
        return gzuncompress($this->dati->leggiDati($key));
    }

    public function scriviDatti(string $key, string $value): void
    {
        $this->dati->scriviDatti($key, gzcompress($value));
    }
}