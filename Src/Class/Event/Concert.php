<?php

namespace php\Class\Event;

class Concert extends Event
{
    private string $artist;

    public function __construct(string $artist, string $place,\DateTime $date = new \DateTime())
    {
        parent::__construct($place, $date);
        $this->artist = $artist;
    }


    public function getArtist(): string
    {
        return $this->artist;
    }

    public function setArtist(string $artist): void
    {
        $this->artist = $artist;
    }

}