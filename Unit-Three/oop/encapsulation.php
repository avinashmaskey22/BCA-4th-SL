<?php

// Class definition
class Employee {
    // Private properties
    private $name;
    private $salary;

    // Constructor to initialize properties
    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    // Public method to set salary
    public function setSalary($amount) {
        if ($amount > 0) {
            $this->salary = $amount;
        } else {
            echo "Salary must be positive. <br>";
        }
    }

    // Public method to get salary
    public function getSalary() {
        return $this->salary;
    }

    // Public method to get employee name
    public function getName() {
        return $this->name;
    }
}

// Create an Employee object
$employee = new Employee("Ram Nepal", 50000);

// Access and manipulate properties using methods
echo "Employee Name: " . $employee->getName() . "<br>";
echo "Initial Salary: " . $employee->getSalary() . "<br>";

// Update salary
$employee->setSalary(60000);
echo "Updated Salary: " . $employee->getSalary() . "<br>";
