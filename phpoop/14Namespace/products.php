<?php

namespace pro;
class Product{
    public function __construct(){
        echo "This is product class <br>";
        $test = new \test\product;
    }
}
function wow(){
    echo "Wow from products file <br>";
}
?>