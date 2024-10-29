<?php
    class parentClass{
        public $test;
    }

    class childClass extends parentClass{

    }

$obj = new childClass();
if(is_subclass_of($obj, "parentClass")){
    echo "This \$obj is an object of subclass of parent class."; 
}
else{
    echo "This \$obj is not an object of subclass of parent class.";
}
?>