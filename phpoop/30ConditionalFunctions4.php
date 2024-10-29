<?php
    class myClass{
        public $test;
    }

if(property_exists("myClass", "test")){
    echo "This property exists."; 
}
else{
    echo "This property does not exist.";
}
?>