<?php
    interface myInterface{

    }

    class myClass{

    }

    if (class_exists("myClass") && interface_exists("myInterface")){
        echo "Class and interface exist";
        $obj = new myClass();

        class MyClass implements myInterface{
            
        }
    }
    else{
        echo "This class or interface does not exist";
    }
?>