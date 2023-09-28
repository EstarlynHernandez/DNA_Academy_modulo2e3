<?php

namespace php\Class\FoodAndDrink;

class Te extends FoodAndDrink
{
    private string $flavor;
    private string $effect;

    /**
     * @param string $flavor
     * @param string $effect
     */
    public function __construct(string $flavor, string $effect = 'no')
    {
        parent::__construct('drink', ['te', 'water']);
        $this->flavor = $flavor;
        $this->effect = $effect;
    }

    public function getFlavor(): string
    {
        return $this->flavor;
    }

    public function setFlavor(string $flavor): void
    {
        $this->flavor = $flavor;
    }

    public function getEffect(): string
    {
        return $this->effect;
    }

    public function setEffect(string $effect): void
    {
        $this->effect = $effect;
    }
}