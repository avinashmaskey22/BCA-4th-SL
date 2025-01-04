<?php
/* 
    In programming, the try, catch, and finally blocks are used for 
    handling exceptions (errors) during runtime in a structured way.

    - try Block: Code that might throw an exception is written inside the try block.
    - catch Block: If an exception occurs in the try block, the catch block is 
      executed. It is used to handle specific or general exceptions.
    - finally Block: This block contains code that will execute regardless of 
      whether an exception occurred or not. It's often used for cleanup operations.
*/

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
