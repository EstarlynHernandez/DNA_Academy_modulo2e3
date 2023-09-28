<?php

namespace php\Class\Book;

class Biblioteca
{
    private array $libri;

    public function __construct($libri = [])
    {
        $this->setLibri($libri);
    }

    public function getLibri(): array
    {
        return $this->libri;
    }

    private function setLibri(array $libri): void
    {
        $this->libri = $libri;
    }

    public function aggiungiLibro(Libro $libro): void
    {
        $this->libri[] = $libro;
    }

    public function leggiLibro($nome): Libro|bool
    {
        foreach ($this->libri as $libro) {
            if ($libro->getTitolo() == $nome) {
                return $libro;
            }
        }

        return false;
    }

    public function rimuoviLibro($titolo): void
    {
        $newLibri = [];
        foreach ($this->libri as $libro) {
            if ($libro->getTitolo() != $titolo) {
                $newLibri[] = $libro;
            }
        }
        $this->setLibri($newLibri);
    }
}

