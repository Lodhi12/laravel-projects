<?php
    trait Hello{
        public function sayHello(){
            echo "Hello from trait";
        }
    }

    trait Hi{
        public function sayHello(){
            echo "Hello from trait";
        }
    }

    class Base{
        // public function sayHello(){
        //     echo "Hello from base class";
        // }

        use hello, hi{
            hello::sayhello insteadOf hi;
            hi::sayHello as newHello;
        }
    }

    class child extends base{
        use hello;
        public function sayHello(){
            echo "Hello from child class";
        }
    }

    $test = new child();
    $test->sayHello();

?>