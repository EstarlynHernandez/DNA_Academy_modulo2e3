<?php

namespace php\Class\Banca;

class LibrettoDiRisparmio extends ContoBancario
{
    public function __construct(int $wallet, string $user)
    {
        parent::__construct($wallet, $user);
    }

    public function getStatus()
    {
        return 'Il vostro stato monetario e in uno stato migliorabile';
    }
}