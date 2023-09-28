<?php

namespace php\Class\Product;

class FoodProduct extends Product
{
    private \DateTime $expireAt;
    private \DateTime $createAt;

    public function __construct(int $price, string $name)
    {
        parent::__construct($price, $name);

        $this->setCreateAt(new \DateTime);
        $this->setExpireAt(new \DateTime);
    }

    public function getExpireAt(): \DateTime
    {
        return $this->expireAt;
    }

    public function setExpireAt(\DateTime $expireAt): void
    {
        $this->expireAt = $expireAt;
    }

    public function getCreateAt(): \DateTime
    {
        return $this->createAt;
    }

    public function setCreateAt(\DateTime $createAt): void
    {
        $this->createAt = $createAt;
    }
}