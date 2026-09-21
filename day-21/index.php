<?php

require 'Product.php';
require 'DiscountedProduct.php';
require 'ProductManager.php';

$manager = new ProductManager();

$manager->addProduct(new Product('Camiseta', 50.0));
$manager->addProduct(new DiscountedProduct('Calça', 100.0, 0.2));

echo "Total: " . $manager->calculateTotal();
