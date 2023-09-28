<?php

namespace php\Class\User;

class Administrator extends User
{
    public function __construct($email, $username, $password)
    {
        parent::__construct($email, $username, $password);
    }

    public function editPost(): string
    {
        return "Non ci sono post per editare in questa sessione";
    }

    public function getUsers(): string
    {
        return "Non ci sono altri utenti in questa sessione";
    }

    public function addPost(): string
    {
        return "post aggiunto con esito, sara istantaneamente rimosso per evitare questa azione dovete modificare le impostazioni sui post";
    }

    public function getPost(): string
    {
        return "non ci sono post in questa istanza";
    }
}