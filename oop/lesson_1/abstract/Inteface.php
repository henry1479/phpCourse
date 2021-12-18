<?php
interface Int1 {
    function func1();
}
interface Int2 {
    function func2();
}

// класс должен переопределить методы интерфейсов Int1 и Int2
class MyClass implements Int1,Int2 {
    public function func1 () {
        echo "func1";
    }
    public function func2() {
        echo "func2";
    }
}


?>