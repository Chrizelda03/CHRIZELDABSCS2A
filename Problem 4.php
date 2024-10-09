<?php
class Vehicle {
    public $name;
    public $speed;
    public $mileage;

    public function __construct($name, $speed, $mileage) {
        $this->name = $name;
        $this->speed = $speed;
        $this->mileage = $mileage;
    }
}
class Bus extends Vehicle {
  public function seating_capacity() {
    $seating_capacity = 50;
    return $seating_capacity;
  }
}
?>
