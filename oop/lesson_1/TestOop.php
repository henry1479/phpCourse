<?php

// вывод страницы путем рендера с контентом для каждой
class Template {
    function header () {        
        echo "Header";
    }
    function main () {        
        echo "Main";
    }
    function footer () {        
        echo "Footer";
    }
}

class Site {
    function content() {
        echo "Content";
    }

    function render ($template){
        $template -> header();
        $template -> main();
        $template -> footer();
    }
}


class Admin {
    function content() {
        echo "Admin";
    }

    function render ($template){
        $template -> header();
        $template -> main();
        $template -> footer();
    }
}

$template = new Template();
$page = new Site();
$admin = new Admin();
$page -> render($template);
$admin -> render($template);







// вызываем метод из другого класса через его экземпляр
// class Demo {
//     function test($obj) {
//         if($obj instanceof Outer) {
//             return $obj->getName();
//         }
//         return "Wrong type of data";
        

//     }
// }

// class Outer {
//     private $name = "Ivan";

//     public function getName () {
//         return "{$this->name} are programer";
//     }
// }

// $d = new Demo;
// $o = new Outer;
// echo $d->test($o);

// в методах можно указывать тип данных
// void - если метод ничего не возвращает


?>