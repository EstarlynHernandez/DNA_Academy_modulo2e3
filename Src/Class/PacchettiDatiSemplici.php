<?php

namespace php\Class;

use php\Interface\PacchettoDati;

class PacchettiDatiSemplici implements PacchettoDati
{
    private array $dati;

    public function getDati(): array
    {
        return $this->dati;
    }

    public function leggiDati(string $key): string
    {
        return $this->dati[$key] ?? 'Error: No es stato trovato nessun dato';
    }

    public function scriviDatti(string $key, string $value): void
    {
        $this->dati[$key] = $value;
    }
}