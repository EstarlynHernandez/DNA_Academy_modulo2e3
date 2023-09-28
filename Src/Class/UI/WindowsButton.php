<?php

namespace php\Class\UI;

use php\Interface\UI\ButtonInterface;

class WindowsButton implements ButtonInterface
{
    public string $color = 'blue';

    public function pain(string $color): void
    {
        $this->color = $color;
    }

    public function click(): string
    {
        return "hai fatto click in windows che ha il colore $this->color";
    }
}
