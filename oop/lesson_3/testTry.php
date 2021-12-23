<?php
    // отработка ошибок

    $x = 10;
    $y = rand(0,3);

    try{
        if($y==0) {
            throw new Exception("На ноль делить нельзя");

        }

        $z=$x/$y;


    } catch(Exception $e) {
        echo $e->getMessage();
    }
echo $z;
echo "Welcome";


?>