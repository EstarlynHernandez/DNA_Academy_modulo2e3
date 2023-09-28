<?php

namespace php\Class\UI;

use php\Interface\UI\ButtonInterface;

class LinuxButton implements ButtonInterface
{
    public string $color = 'black';

    public function pain(string $color): void
    {
        $this->color = $color;
    }

    public function click(): string
    {
        return "hai fatto click nella tua distribuzione di Linux che ha il colore $this->color";
    }
}