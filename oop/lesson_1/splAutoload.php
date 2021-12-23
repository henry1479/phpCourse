<?php
// импортирование файлов динамически

spl_autoload_register(function($classname){
    include_once "classes/$classname.php";
});

// неимпортированный класс
$good =new Good;

echo $good-> getGood();


?>