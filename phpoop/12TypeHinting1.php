<?php
//     function sum($v){
//         echo $v+1;
//     }
//     function fruits(array $names){
//         foreach($names as $name){
//             echo $name . "<br>";
//         }
//     }

// $test = ["Apple", "Orange", "Banana"];
// fruits($test);
// sum(33);    

    class Hello{
        public function sayHello(){
            echo "Hello everyone";
        }
    }

    class Bye{
        public function sayBye(){
            echo "Hello everyone";
        }
    }

    function wow(Hello $c){
        $c->sayHello();
    }

$test = new Bye();

wow($test);
?>