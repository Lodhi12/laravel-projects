<?php
    class abc{
        private $name = "Ammar Lodhi";
        private $data = ["Name"=>"Ammar Lodhi", "Course"=>"PHP", "Free"=>"2000"];

        public function __get($property){
            if(array_key_exists($key, $this->data)){
                return $this->data[$key];
            }
            else{
                return "This key($key) is not defined.";
            }
        }
    } 

$test = new abc();

echo $test->name;

echo $test->course;

echo $test->age;
?>