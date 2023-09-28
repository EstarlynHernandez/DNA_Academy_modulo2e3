<?php

namespace php\Class\Book;

class Autore
{
    private string $nome;
    private string $cognome;
    private int $eta;

    public function __construct($nome = 'anonimo', $cognome = 'anonimo', $eta = 'sconosciuta')
    {
        $this->setNome($nome);
        $this->setCognome($cognome);
        $this->setEta($eta);
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getCognome(): string
    {
        return $this->cognome;
    }

    public function setCognome(string $cognome): void
    {
        $this->cognome = $cognome;
    }

    public function getEta(): int
    {
        return $this->eta;
    }

    public function setEta(int $eta): void
    {
        $this->eta = $eta;
    }
}