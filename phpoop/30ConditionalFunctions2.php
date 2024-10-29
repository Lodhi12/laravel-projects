<?php
    class myClass{
        public function myMethod(){

        }
    }

$obj = new myClass();

if(method_exists($obj, "MyMethods")){
    echo "This method exists.";
}

else{
    echo "This method does not exist.";
}
?>