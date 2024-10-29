<?php
    class Student{
        public $course;
        public $first_name;
        public $last_name;
        private $detail = ['name' => 'Test Name', 'age'=> '20'];

        public function setName($fname, $lname){
            $this->first_name = $fname;
            $this->last_name = $lname;
        }

        public function __isset($name){
            echo isset($this->detail[$name]);
        }
    }

$test = new Student();
echo isset($test->first_name);

?>