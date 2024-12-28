<?php

// Function to divide two numbers
function divide($numerator, $denominator) {
    if ($denominator == 0) {
        // Throw an exception for division by zero
        throw new Exception("Division by zero is not allowed.");
    }
    return $numerator / $denominator;
}

try {
    // Try to divide numbers
    echo "Result: " . divide(10, 2) . "<br>"; // Should work
    echo "Result: " . divide(10, 0) . "<br>"; // Should throw an exception
} catch (Exception $e) {
    // Catch and handle the exception
    echo "Error: " . $e->getMessage() . "<br>";
} finally {
    // Code that always executes, regardless of exceptions
    echo "Execution complete.";
}
