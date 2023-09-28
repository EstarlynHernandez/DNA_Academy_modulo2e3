<?php

namespace php\Class\Book;

class Libro
{
    private string $titolo;
    private Autore $autore;
    private int $pagine;

    public function __construct($titolo = 'unknown', $autore = new Autore(), $pagine = 0)
    {
        $this->setTitolo($titolo);
        $this->setAutore($autore);
        $this->setPagine($pagine);
    }

    public function getTitolo(): string
    {
        return $this->titolo;
    }

    public function setTitolo(string $titolo): void
    {
        $this->titolo = $titolo;
    }

    public function getAutore(): Autore
    {
        return $this->autore;
    }

    public function setAutore(Autore $autore): void
    {
        $this->autore = $autore;
    }

    public function getPagine(): int
    {
        return $this->pagine;
    }

    public function setPagine(int $pagine): void
    {
        $this->pagine = $pagine;
    }
}