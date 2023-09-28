<?php

namespace php\Class\Hotel;

class Reservation
{
    private Client $client;
    private Room $camera;
    private bool $active;

    /**
     * @param Client $client
     * @param Room $camera
     */
    public function __construct(Client $client, Room $camera)
    {
        $this->setRoom($camera);
        $this->setClient($client);
        $this->setActive();

        return $this->isActive();
    }

    public function getClient(): Client
    {
        return $this->client;
    }

    public function setClient(Client $client): void
    {
        $this->client = $client;
    }

    public function getRoom(): Room
    {
        return $this->camera;
    }

    public function setRoom(Room $camera): void
    {
        $this->camera = $camera;
    }

    public function isActive(): bool
    {
        return $this->active;
    }

    public function setActive(): void
    {
        $this->active = $this->getRoom()->isAvailable();
        $this->camera->setAvailable(false);
    }

    public function remove(): void
    {
        $this->getRoom()->setAvailable(true);
        $this->setActive(false);
    }
}