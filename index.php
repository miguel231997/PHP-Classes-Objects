<?php
//A good PHP project that involves PHP classes, objects, typed properties, constructors, and destructors could be building a simple Employee Management System. Here's a brief description of the project:

class Employee {
    private int $id;
    private string $name;
    private string $position;
    private float $salary;

    public function __construct(int $id, string $name, string $position, float $salary)
    {
        $this->id = $id;
        $this->name = $name;
        $this->position = $position;
        $this->salary = $salary;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getPosition(): string {
        return $this->position;
    }

    public function getSalary(): float {
        return $this->salary;
    }

    public function setId(int $id): void {
        $this->id = $id;
    } 

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function setPosition(string $position): void {
        $this->position = $position;
    }

    public function setSalary(float $salary): void {
        $this->salary = $salary;
    }

    public function __destruct(){
        // perform any cleanup tasks

        echo "employee object destroyed." . PHP_EOL;
    }
}

// Usage example:
$employee1 = new Employee(1, "John Doe", "Manager", 5000.0);
echo "Employee ID: " . $employee1->getId() . PHP_EOL;
echo "Employee Name: " . $employee1->getName() . PHP_EOL;
echo "Employee Position: " . $employee1->getPosition() . PHP_EOL;
echo "Employee Salary: $" . $employee1->getSalary() . PHP_EOL;

$employee1->setSalary(5500.0);
echo "Updated Salary: $" . $employee1->getSalary() . PHP_EOL;

// Output:
// Employee ID: 1
// Employee Name: John Doe
// Employee Position: Manager
// Employee Salary: $5000.0
// Updated Salary: $5500.0
// Employee object destroyed.