<?php

// Class declaration
class Calculation {

    // Variables declaration
    public $a, $b, $c;

    // Method to perform addition
    function sum() {
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    // Method to perform subtraction
    function sub() {
        $this->c = $this->a - $this->b;
        return $this->c;  // Return the result of subtraction
    }
}

// Create the first object and assign values
$c1 = new Calculation();
$c1->a = 20;
$c1->b = 10;

// Create the second object and assign values
$c2 = new Calculation();
$c2->a = 50;
$c2->b = 35;

// Perform addition and print the result
echo "Summed value of c1 is: " . $c1->sum() . "<br>";

// Perform subtraction and print the result
echo "Subtracted value of c2 is: " . $c2->sub() . "<br>";

?>
