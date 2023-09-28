<?php

namespace php\Class\Event;

class Event
{
    private \DateTime $date;
    private string $place;

    public function __construct(string $place, \DateTime $date = new \DateTime())
    {
        $this->date = $date;
        $this->place = $place;
    }

    public function getDate(): string
    {
        return $this->date->format("d-m-y");
    }

    public function getHour(): string
    {
        return $this->date->format("h-i-s");
    }

    public function setDate(\DateTime $date): void
    {
        $this->date = $date;
    }

    public function getPlace(): string
    {
        return $this->place;
    }

    public function setPlace(string $place): void
    {
        $this->place = $place;
    }


}