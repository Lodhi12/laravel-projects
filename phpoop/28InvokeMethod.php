<?php
    class calculator {
        public $a, $b, $c;

        public function __construct($a, $b){
            $this->a = $a;
            $this->b = $b;
        }

        public function sum(){
            echo $this->a + $this->b;
        }

        public function __invoke(){
            echo $this->a + $this->b;
        }
    }

$obj = new calculation(20, 30);

$obj->sum();
?>