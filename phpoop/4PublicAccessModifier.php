<?php
    class Base{
        //public $name;
        protected $name;

        public function __construct($name){
            $this->name = $name;
        }

        public function show(){
            echo "Your name is: ". $this->name . "<br>";
        }
    }

$test = new Base("Ammar");    
$test->show();

//setting the value of the public attribute
$test-> name = "Lodhi";
$test->show();
?>