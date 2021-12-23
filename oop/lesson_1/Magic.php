<?php
class Magic {
    private $fio;

    function __construct($fio)
    {
        $this -> fio = $fio;
    } 
    // магический метод при выводе объекта
    function __toString()
    {
        return "Hello {$this->fio}";
    }

    function __get($name) {
        die ("Error - name is not exist");
    }

    function __set($name, $value) {
        die ("Error - name is not exist");
    }
    function __call($name, $value) {
        echo "No exist method";
    }
    // загрузчик классов
    function __autoload($class_name){
        include "classes/$class_name.php";

    }
    
}

$obj = new Magic('Иван');
echo $obj -> name;
echo $obj -> name;
$obj ->x = 10;
$obj->start();

// echo $obj;

?>