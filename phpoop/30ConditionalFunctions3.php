<?php
    trait myTrait{
        public function myMethod(){

        }
    }

if(trait_exists("myTrait")){
    echo "This trait exists.";
    class myClass{
        use myTrait;
    }
}


else{
    echo "This trait does not exist.";
}
?>