<?php
    include '33Database.php';

    $obj = new Database();
    $obj->insert('students', ["student_name" => "Ammar", "age" => 22, "city"=>"Karachi"]);

    echo "Insert result is: ";
    print_r($obj->getResult());

    $obj->update('students', ["student_name" => "Lodhi", "age" => 22, "city"=>"Karachi"], 'id="7"');
    echo "Update result is: ";
    print_r($obj->getResult());

    $obj->delete('students', 'id="6"');

    $obj->sql('SELECT * FROM students');
    $obj2 = new Database();
    $obj2->select('students', '*', null, null, null, null);
    echo "Select result is: ";
    print_r($obj2->getResult());

    $obj3 = new Database();
    echo $obj3->pagination('students', '*', null, null, null, 2);

    $join = "citydb ON students.city = citytb.cid";
?>