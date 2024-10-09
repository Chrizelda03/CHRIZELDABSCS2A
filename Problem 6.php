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
  public function fare() {
    $total_fare = $this->seating_capacity() * 100;
    return $total_fare + ($total_fare * 0.10);
  }
}
    
$bus = new Bus("Saulog Bus", 30, 80);
echo "The Bus Fare is: ",$bus->fare();
?>
