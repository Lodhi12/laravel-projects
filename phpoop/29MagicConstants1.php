<?php
    namespace myNameSpace;

    echo "Line number : ".__LINE__ . "<br>"; //returns the line number
    echo "The full path of this file is : ".__FILE__ . "<br>"; //returns the line number
    echo "The full path of this directory is : ".__DIR__ . "<br>"; //returns the line number
    echo "The function name is : ".__FUNCTION__ . "<br>"; //returns the line number

    function myFunction(){
        echo "The function's name is: ". __FUNCTION__;
    }

    class myClass{
        public function getClassName(){
            return __CLASS__; //returns the name of the class where it is placed
        }

        public function getClassAnimal(){
            return __METHOD__; //returns the name of the method where it is placed
        }

        public function getNameSpace(){
            return __NAMESPACE__; //returns the name of the method where it is placed
        }
    }

myFunction();

$obj = new myClass();
echo $obj->getClassName();
?>