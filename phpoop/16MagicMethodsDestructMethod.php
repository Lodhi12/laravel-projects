<?php
    class abc{
        public function __construct(){
            echo "This is construct function <br>";
        }
        public function hello(){
            echo "This is Hello function<br>";
        }
        public function __destruct(){
            echo "This is destruct function";
        }
    }

    //destruct function close connection krne ke liye kaam krega

$test = new abc();
$test->hello();

?>