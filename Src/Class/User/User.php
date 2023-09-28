<?php

namespace php\Class\User;

class User
{
    private string $username;
    private string $password;
    private string $email;

    public function __construct($email, $username, $password)
    {
        $this->setEmail($email);
        $this->setUsername($username);
        $this->setPassword($password);
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    protected function getPassword(): string
    {
        return $this->password;
    }

    protected function setPassword(string $password): void
    {
        $this->password = $password;
    }
}