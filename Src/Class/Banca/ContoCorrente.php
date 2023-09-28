<?php

namespace php\Class\Banca;

class ContoCorrente extends ContoBancario
{

    public function __construct(int $wallet, string $user)
    {
        parent::__construct($wallet, $user);
    }

    public function getCard(): string
    {
        return 'La sua carta di debito vi sara consegnata il prima possibile';
    }
}