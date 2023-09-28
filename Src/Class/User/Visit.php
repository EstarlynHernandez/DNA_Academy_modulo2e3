<?php

namespace php\Class\User;

class Visit extends User
{
    public function __construct($email, $username, $password)
    {
        parent::__construct($email, $username, $password);
    }

    public function getPost(): string
    {
        return "no ci sono post in questa istanza";
    }
}