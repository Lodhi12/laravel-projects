<?php
    require "products.php";
    require "testing.php";

    function wow(){
        echo "Wow from products file <br>";
    }

$obj = new test\products();
$obj1 = new pro\products();

wow();

pro\wow();
?>