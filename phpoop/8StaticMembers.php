<?php
    class base{
        public static $name = "Ammar Lodhi";

        // public static function show(){
        //     echo self::$name;
        // }

        // public function __construct(){
        //     self::show();
        // }
        // public function __construct($n){
        //     self::$name = $n;
        // }
    }

    class Derived extends base{
        public static function show(){
            echo parent::$name;
        }
    }

// echo base::$name."<br>";
// base::show();

$test1 = new base();
$test1 = new base("Wow");

$test2 = new Derived();
$test2->show();
?>