<?php
    class myClass{
        function __construct(){
            print_r(get_class_methods($this));
        }

        function myFunc1(){

        }

        private function myFunc2(){

        }
    }

$class_methods = get_class_methods('myClass');

print_r($class_methods);

foreach($class_methods as $methods){
    echo $methods. "<br>";
}

$obj = new myClass();
?>