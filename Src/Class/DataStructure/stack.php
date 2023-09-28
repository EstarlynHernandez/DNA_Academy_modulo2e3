<?php

namespace php\DataStructure;

class stack
{
    private array $array = [];
    private int $max = 5;

    public function __construct(array $array = [])
    {
        if (isset($array) && count($array) > 0){
            $this->array = $array;
        }
    }

    function count(): int
    {
        $iter = 0;

        while (isset($this->array[$iter])) {
            $iter++;
        }

        return $iter;
    }


    #@return true is the item is successful add and return false if the array is full
    public function push($item): bool
    {
        for ($i = 0; $i < $this->max; $i++) {
            if (!isset($this->array[$i])) {
                $this->array[$i] = $item;
                return true;
            }
        }

        return false;
    }

    public function pop(): mixed
    {
        $count = $this->count() - 1;
        $result = $this->array[$count] ?? false;
        $new = [];

        for ($i = 0; $i < $count; $i++){
            $new[] = $this->array[$i];
        }

        $this->array = $new;

        return $result;
    }

    public function top(): mixed
    {
        $count = $this->count();

        if ($this->isEmpty()) {
            return false;
        }

        return $this->array[$count - 1];
    }

    public function isEmpty(): bool
    {
        return $this->count() <= 0;
    }

    public function isFull(): bool
    {
        return $this->count() >= $this->max;
    }
}
