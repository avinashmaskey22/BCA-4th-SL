<?php

/* 
 -  Method overriding is a feature in object-oriented programming where a subclass 
    provides a specific implementation for a method that is already defined in its 
    parent class. 
 
 -  The method in the subclass must have the same name, return type, 
    and parameters as the one in the parent class. 
 
    - This allows a subclass to offer behavior that is different from or 
      extends the behavior of its parent class.
*/

// Parent class
class Vehicles {
    // Method to display vehicle sound
    public function sound() {
        return "Generic vehicle sound.";
    }
}

// Child class: Car
class Cars extends Vehicles {
    // Override the sound method
    public function sound() {
        return "Vroom Vroom!";
    }
}

// Child class: Bike
class Bikes extends Vehicles {
    // Override the sound method
    public function sound() {
        return "Brrr Brrr!";
    }
}

// Create objects and call the sound method
$vehicle = new Vehicles();
echo "Vehicle: " . $vehicle->sound() . "<br>";

$car = new Cars();
echo "Car: " . $car->sound() . "<br>";

$bike = new Bikes();
echo "Bike: " . $bike->sound() . "<br>";
