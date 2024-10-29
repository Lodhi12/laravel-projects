<?php
    abstract class parentClass{

        //abstract method is important for abstract class
        public $name;

        abstract protected function calc($a, $b);

        }

    class childClass extends parentClass{
        public function calc($a, $b){
            echo $a + $b;
        }    
    }

    $test = new childClass();
    $test->calc(10, 20);

    personalinfo();
?>