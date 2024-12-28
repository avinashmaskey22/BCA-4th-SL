<?php

// Base class
class Appliance {
    // Method to display appliance type
    public function operate() {
        return "This appliance operates in a general way.";
    }
}

// Derived class: WashingMachine
class WashingMachine extends Appliance {
    // Override the operate method
    public function operate() {
        return "It Washes clothes...";
    }
}

// Derived class: Refrigerator
class Refrigerator extends Appliance {
    // Override the operate method
    public function operate() {
        return "It Keeps food cold...";
    }
}

// Derived class: Microwave
class Microwave extends Appliance {
    // Override the operate method
    public function operate() {
        return "It Heats the food...";
    }
}

// Polymorphism in action
$appliances = [
    new WashingMachine(),
    new Refrigerator(),
    new Microwave(),
    new Appliance()
];

foreach ($appliances as $appliance) {
    echo $appliance->operate() . "<br>";
}
?>
