<?php

namespace php\Factory\FoodAndDrink;

use php\Class\FoodAndDrink\Coffee;
use php\Class\FoodAndDrink\Juice;
use php\Class\FoodAndDrink\Te;

class DrinkFactory
{
    private array $drinks = [
        'caffeEspresso' => 'coffee',
        'caffeAmericano' => 'coffee',
        'caffeLungo' => 'coffee',
        'caffe' => 'coffee',
        'te' => 'te',
        'teVerde' => 'te',
        'teClassico' => 'te',
        'camomilla' => 'te',
        'succoArancia' => 'juice',
        'succoAnanas' => 'juice',
        'succoFragola' => 'juice',
        'succoPera' => 'juice',
        'succoPesca' => 'juice',
    ];

    public function getDrink($drink)
    {
        if (isset($this->drinks[$drink])) {
            if ($this->drinks[$drink] == 'coffee') {
                return $this->coffee($drink);
            }
            return match ($this->drinks[$drink]) {
                'coffee' => $this->coffee($drink),
                'juice' => $this->juice($drink),
                'te' => $this->te($drink)
            };
        }
        return 'Bevanda no trovata';
    }

    private function coffee(string $type): Coffee
    {
        return new Coffee($type);
    }

    private function juice(string $type): Juice
    {
        return new Juice($type);
    }

    private function te(string $type): Te
    {
        return new Te($type);
    }
}