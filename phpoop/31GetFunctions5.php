<?php
    class abc{
        static public function test(){
            var_dump(get_called_class());
        }
    }

    class xyz extends abc{

    }

    print_r(get_declared_classes());

abc::test();
xyz::test();
?>