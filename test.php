<?php

class Car {
    public $brand;
    public $model;
    public $year;
    public $color;

    public function __construct($brand, $model, $year, $color) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
    }

    public function getDetails() {
        return "Brand: $this->brand, Model: $this->model, Year: $this->year, Color: $this->color";
    }
}

// Create a car object
$myCar = new Car("Toyota", "Camry", 2023, "Silver");

// Access and print car details
echo $myCar->getDetails();
?>