<?php

namespace php\Factory\UI;

use php\Class\UI\LinuxButton;
use php\Class\UI\MacButton;
use php\Class\UI\WindowsButton;

class UIFactory
{
    public static function create($element): MacButton|WindowsButton|LinuxButton|null
    {
        $element = strtolower($element);
        return match ($element) {
            'windows'   => new WindowsButton(),
            'mac'       => new MacButton(),
            'linux'     => new LinuxButton(),
            default     => null,
        };
    }
}