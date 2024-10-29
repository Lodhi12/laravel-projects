<?php
    class Base{
        public $name = "Parent Class";

        public function calc($a, $b){
            return $a * $b;
        }
    }

    class Derived extends base{
        public $name = "Child Class";

        public function calc($a, $b){
            return $a + $b;
        }
    }
$test1 = new Derived();

echo $test1->name;

$test2 = new Base();

echo $test2->name;
?>