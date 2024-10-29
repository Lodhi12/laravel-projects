<?php
    class abc{
        public function first(){
            echo "This is a first function <br>";
            return $this;
        }
        public function second(){
            echo "This is a second function <br>";
            return $this;
        }
        public function third(){
            echo "This is a third function <br>";
            return $this;
        }
    }

$test = new abc();

// $test->first();
// $test->second();
// $test->third();

$test->first()->second()->third();
?>