<?php
    class Student{
        private $name;

        public function hello(){
            echo $this->name;
        }

        public function __get($property){
            echo "You are trying to access non existing or private property ($property) <br>";
        }

        public function __set($property, $value){
            echo "This is a non existing or private property $property";

            if(property_exists($this, $property)){
                $this->$property = $value;
            }
            else{
                echo "Property does not exist :$property";
            }
        }
    }

$test1 = new Student();
$test->course = "PHP";
$test->name = "Ammar Lodhi";
?>