<?php

namespace php\Class\User;

class Editor extends User
{
    public function __construct($email, $username, $password)
    {
        parent::__construct($email, $username, $password);
    }

    public function editPost(): string
    {
        return "Non ci sono post da editare in questa sessione";
    }

    public function addPost(): string
    {
        return "post aggiunto con esito, sara eliminate per configurazione del admin";
    }

    public function getPost(): string
    {
        return "non ci sono post in questa istanza";
    }
}