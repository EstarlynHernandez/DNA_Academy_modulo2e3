<?php

namespace php\DataStructure;

class queue
{
    private array $array = [];

    /**
     * @param array $array
     */
    public function __construct(array $array = [])
    {
        $this->array = $array;
    }

    /**
     * @return int
     */
    function count(): int
    {
        $iter = 0;

        while (isset($this->array[$iter])) {
            $iter++;
        }

        return $iter;
    }

    /**
     * @return bool -true is the item is successful add and return false if the array is full
     */
    public function enqueue($item): bool
    {
        $iter = 0;
        while (true) {
            if (!isset($this->array[$iter])) {
                $this->array[$iter] = $item;
                return true;
            }
            $iter++;
        }
    }

    /**
     * @return mixed -item removed or null is the array is empty
     */
    public function dequeue(): mixed
    {
        $count = $this->count();
        $result = $this->array[0] ?? null;
        $new = [];

        for ($i = 1; $i < $count; $i++) {
            $new[] = $this->array[$i];
        }

        $this->array = $new;

        return $result;
    }

    /**
     * @return mixed -the first item
     */
    public function front(): mixed
    {
        if ($this->isEmpty()) {
            return null;
        }

        return $this->array[0];
    }

    /**
     * @return bool
     */
    protected function isEmpty(): bool
    {
        return $this->count() <= 0;
    }

    static public function sum()
    {
        return 'sum';
    }
}
