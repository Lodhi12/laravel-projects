<?php
    class School {
        public function getNames(Student $names){
            echo "<ul>";
            foreach($names->Names() as $name){
                echo "<li>" . $name . "</li>";
            }
            echo "</ul>";
        }
    }

    class Student {
        public function Names(){
            return ["Ammar", "Lodhi", "Nemo"];
        }
    }

    class Library {

    }

    $stu = new Student();
    $sch = new School();

    $sch->getNames($stu);

    $lib = new Library();
?>
