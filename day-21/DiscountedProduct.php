<?php

class DiscountedProduct extends Product {
    private float $discountRate;

    public function __construct(string $name, float $price, float $discountRate) {
        parent::__construct($name, $price);
        $this->discountRate = $discountRate;
    }

    public function calculatePrice(): float {
        return $this->price * (1 - $this->discountRate);
    }

    public function getDiscountRate(): float {
        return $this->discountRate;
    }
}
