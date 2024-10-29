<?php
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $db_name = "testing1";

    $conn = new mysqli($server_name, $user_name, $password, $db_name);

    if ($conn->connect_error){
        die("Connection failed: ". $conn->connect_error);
    }

    $sql = "SELECT * FROM students";

    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row=$result->fetch_assoc()){
            echo "Id: {$row['id']} - Name: {$row['student_name']} - Age: {$row['age']} - City: {$row['city']} <br>";
        }
    }

    else{
        echo "No result found";
    }

    $conn->close();
?>