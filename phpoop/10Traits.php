<?php
    //traits functions hote hain jo bahir defined hote hain aur mukhtalif classes mein use hojate hain
    trait Hello{
        public function sayHello(){
            echo "Hello World";
        }

        public function sayHi(){
            echo "Hi everyone";
        }
    }

    trait Bye{
        public function sayBye(){
            echo "Bye World";
        }
        public function sayBe(){
            echo "Be everyone";
        }
    }

    class base {
        use Hello, Bye;
    }

    class base {
        use Hello, Bye;
    }

$test = new base();
$test2 = new base2();

$test->sayHello();
$test2->sayHello();
?>