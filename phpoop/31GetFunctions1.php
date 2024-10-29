<?php
    class myClass{
        function name(){
            echo "Class Name: ".get_class($this) . "<br>";
        }
    }    

$obj = new myClass();

$obj->name();

echo "Class Name is : ".get_class($obj);
?>