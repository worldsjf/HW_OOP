<?php
abstract class Employee {
    protected $name;
    protected $salary;

    abstract public function getDetails();

    public function setName($name) {
        $this->name = $name;
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }
}

class Manager extends Employee {
    
    public function getDetails() {
        $details = "Manager Details:";
        $details .= "Name: " . $this->name . "";
        $details .= "Salary: " . $this->salary . "";
        return $details;
    }
}

class Staff extends Employee {
    public function getDetails() {
        $details = "Staff Details:";
        $details .= "Name: " . $this->name . "";
        $details .= "Salary: " . $this->salary . "";
        return $details;
    }
}

// Example usage:
$manager = new Manager();
$manager->setName("HV SANG ");
$manager->setSalary(5000);
echo $manager->getDetails();
echo "<br>";
$staff = new Staff();
$staff->setName("TD TINH ");
$staff->setSalary(2500);
echo $staff->getDetails();
