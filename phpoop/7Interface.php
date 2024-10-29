<?php
    interface parent1{
        public function calc ($a, $b);
    }

    interface parent2{
        function sub($c, $d);
    }

    class childClass implements parent1, parent2{
        public function calc($a, $b){
            echo "The result of two numbers addition is: ". $a + $b ."<br>";
        }

        public function sub($a, $b){
            echo $a - $b ."<br>";
        }
    }

$calc1 = new childClass();
$calc1->calc(10, 50);
$calc1->sub(50, 10);
?>
