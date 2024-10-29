<?php
    class Student{
        public $name;
        public $course;

        public function __construct($n){
            $this->name = $n;
        }

        public function setCourse(course $c){
            $this->name = $c;
        }

        public function __clone(){
            $this->course = clone $this->course;
        }
    }

    class course{
        public $cname;
        public function __construct($cn){
            $this->cname = $cn;
        }
    }    

$student1 = new Student("Ammar Lodhi");

$course1 = new course("PHP");

$student1->setCourse($course1);

echo $student1->name;

$student2 = clone $student1; //copy by value

$student2->name = "Ammar Lodhi";
$student2->course->cname = "Python";
print_r($student1);
print_r($student2);
?>