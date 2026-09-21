<?php

class ProductManager {
    private array $products = [];

    public function addProduct(Product $product): void {
        $this->products[] = $product;
    }

    public function calculateTotal(): float {
        $total = 0.0;
        foreach ($this->products as $product) {
            $total += $product->calculatePrice();
        }
        return $total;
    }

    public function getProducts(): array {
        return $this->products;
    }
}
