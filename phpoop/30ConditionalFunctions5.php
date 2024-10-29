<?php
    class myClass{
        public $test;
    }

$obj = new myClass();
if(is_a($obj, "myClass")){
    echo "This object exists in myClass."; 
}
else{
    echo "This object does not exist in myClasss.";
}
?>