<?php
    class myClass{
        public $var1;
        public $var2 = "Hello";
        public $var3 = 100;
        private $var4;
    }

    function __construct(){
        $this->var1 = "Wow"; //wont work
        $this->var2 = "World"; //wont work
        print_r(get_class_vars(__CLASS__));
        print_r(get_object_vars($this));
    }

$obj = new myClass();

$class_vars = get_class_vars(get_class($obj));
$object_vars = get_object_var($obj);
print_r($class_vars);
?>