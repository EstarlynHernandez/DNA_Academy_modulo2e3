<?php

namespace php\Class\Hotel;

class Client
{

    private string $name;
    private string $lastname;

    /**
     * @param string $name
     * @param string $lastname
     */
    public function __construct(string $name, string $lastname)
    {
        $this->setName($name);
        $this->setLastname($lastname);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }
}