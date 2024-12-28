<?php

/* Real-World Example: Unique ID Generator */

class UniqueID {
    // Static property to track the next ID
    private static $nextID = 1;

    // Method to get the next ID
    public static function generateID() {
        return self::$nextID++;
    }
}

// Generate unique IDs
echo "Generated ID: " . UniqueID::generateID() . "<br>";
echo "Generated ID: " . UniqueID::generateID() . "<br>";
echo "Generated ID: " . UniqueID::generateID() . "<br>";
