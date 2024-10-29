<?php
    class Employee {
        public $name;
        public $age;
        public $salary;

        function __construct($name, $age, $salary){
            $this->name = $name;
            $this->age = $age;
            $this->salary = $salary;
        }

        function info(){
            echo "<h3>Employee Profile: </h3><br>";
            echo "Employee Name: ".$this->name."<br>";
            echo "Employee Age: ".$this->age."<br>";
            echo "Employee Salary: ".$this->salary."<br>";
        }
    }

    class Manager extends Employee {
        public $ta = 1000;
        public $phone = 300;
        public $totalSalary;

        function info(){
            $this->totalSalary = $this->salary + $this->ta + $this->phone;
            echo "<h3>Manager Profile: </h3><br>";
            echo "Manager Name: ".$this->name."<br>";
            echo "Manager Age: ".$this->age."<br>";
            echo "Manager Salary: ".$this->totalSalary."<br>";
        }
    }

$e1 = new Employee("Ammar", 22, 20000);    
$e1->info();

$e2 = new Manager("Lodhi", 22, 25000);
$e2->info();

$e3 = new Employee("Don", 27, 2000);
$e3->info();
?>