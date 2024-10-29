<?php
    class myClass{
        public $test;
    }

class_alias("myClass", "mc");

$a = new myClass();
$b = new mc(); 

//both are same classes

$a->test = "Hello";

echo $a->test;

$b->test = "Wow";
echo $b->test;
?>