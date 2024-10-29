<?php
    class base{
        protected static $name = "Ammar";

        public function show(){
            echo static::$name; //static mein derived class aur self mein parent class ke name ko print krega
        }
    }

    class derived extends base{
        protected static $name = "Lodhi";
    }

$test = new derived();
$test->show();
?>