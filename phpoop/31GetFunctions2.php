<?php
    class abc{

    }

    class xyz extends abc{
        function name(){
            echo "Class name: ".get_parent_class($this)."<br>";
        }
    }

$obj = new xyz();

$obj->name();

echo "Class name is: ".get_parent_class('xyz');
?>