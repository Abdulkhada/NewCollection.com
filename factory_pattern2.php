<?php

// Product Interface: All product types should implement this interface
interface Product {
    public function getName();
    public function getPrice();
}

// Electronics Product class
class Electronics implements Product {
    private $name = "Smartphone";
    private $price = 499.99;

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }
}

// Clothing Product class
class Clothing implements Product {
    private $name = "T-Shirt";
    private $price = 19.99;

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }
}

// Food Product class
class Food implements Product {
    private $name = "Pizza";
    private $price = 12.99;

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }
}

// ProductFactory: A factory class that returns different types of products based on input
class ProductFactory {
    public static function createProduct($type) {
        switch ($type) {
            case 'electronics':
                return new Electronics();
            case 'clothing':
                return new Clothing();
            case 'food':
                return new Food();
            default:
                throw new Exception("Invalid product type");
        }
    }
}

// Example usage: Creating different types of products
try {
    // Create an Electronics product
    $electronics = ProductFactory::createProduct("electronics");
    echo "Product: " . $electronics->getName() . " - Price: $" . $electronics->getPrice() . "\n";

    // Create a Clothing product
    $clothing = ProductFactory::createProduct("clothing");
    echo "Product: " . $clothing->getName() . " - Price: $" . $clothing->getPrice() . "\n";

    // Create a Food product
    $food = ProductFactory::createProduct("food");
    echo "Product: " . $food->getName() . " - Price: $" . $food->getPrice() . "\n";

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>
