<?php
    class Person{
        
        public $name;
        public $age;

        function __construct($name = "No Name", $age = 0){
            $this->name = $name;
            $this->age = $age;
        }

        function show(){
            echo $this->name . " - ". $this->age;
        }
    }

$p1 = new Person("Ammar Lodhi", 22);

$p1->show();

?>