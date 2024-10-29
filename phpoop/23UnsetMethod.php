<?php
    class Student{
        public $course = "JS";
         private $first_name;
         private $last_name;

         public function setName($fname, $lname){
            $this->first_name = $fname;
            $this->last_name = $lname;
         }

         public function __unset($property){
            unset($this->$property);
         }
    }

$test = new Student();

$test->setName("Ammar", "Lodhi");

unset($test->first_name);

print_r($test);
?>