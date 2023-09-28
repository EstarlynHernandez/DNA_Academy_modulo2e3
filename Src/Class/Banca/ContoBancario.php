<?php

namespace php\Class\Banca;

class ContoBancario
{
    private int $wallet;
    private string $user;

    /**
     * @param int $wallet
     * @param string $user
     */
    public function __construct(int $wallet, string $user)
    {
        $this->wallet = $wallet;
        $this->user = $user;
    }


    public function withdrawal(int $amount): string
    {
        if ($amount < $this->wallet) {
            $this->wallet -= $amount;

            return 'ritiro realizzato con successo';
        }

        return 'non hai abbastanza denaro nel tuo portafoglio';
    }

    public function deposit(int $amount): string
    {
        $this->wallet += $amount;

        return 'deposito completato con successo';
    }

    public function getWallet(): int
    {
        return $this->wallet;
    }

    public function getUser(): int
    {
        return $this->user;
    }

    public function setUser(string $user): void
    {
        $this->user = $user;
    }
}