<?php

namespace php\Class\Event;

class Show extends Event
{
    private string $argument;

    public function __construct(string $argument, $place, $data)
    {
        parent::__construct($place, $data);
        $this->argument = $argument;
    }


    public function getArgument(): string
    {
        return $this->argument;
    }

    public function setArgument(string $argument): void
    {
        $this->argument = $argument;
    }
}