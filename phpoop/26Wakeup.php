<?php
    class Student{
        public $course = "Ammar";
        private $first_name;
        private $last_name;

        public function setName($fname, $lname){
            $this->first_name = $fname;
            $this->last_name = $lname;
        }

        public function __construct(){
        }

        public function __sleep(){
            return array('first_name', 'last_name');
        }

        public function __wakeup(){
            return array('first_name', 'last_name');
        }
    }

$obj = new Student();

$obj->setName("Ammar", "Lodhi");

$sr1 = serialize($obj);

$us = unserialize($srl);

print_r($us);
?>