<?php

namespace php\Class\UI;

use php\Interface\UI\ButtonInterface;
use php\Interface\UI\PanelInterface;
use php\Interface\UI\WindowsInterface;

class MacButton implements ButtonInterface
{
    public string $color = 'white';

    public function pain(string $color): void
    {
        $this->color = $color;
    }

    public function click(): string
    {
        return "hai fatto click nel mac che ha il colore $this->color";
    }
}