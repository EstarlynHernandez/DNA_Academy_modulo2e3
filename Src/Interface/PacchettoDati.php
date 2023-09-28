<?php

namespace php\Interface;

interface PacchettoDati
{
    public function leggiDati(string $key);
    public function scriviDatti(string $key, string $value);
}