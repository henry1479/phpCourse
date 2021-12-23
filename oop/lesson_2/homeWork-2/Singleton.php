<?php
 include './Trait.php';
 class Singleton {
    use MyTrait;
    // Экземпляр объекта
    // Защищаем от создания через new Singleton
    private function __construct() { /* ... @return Singleton */ } 
    // Защищаем от создания через клонирование
    private function __clone() { /* ... @return Singleton */ }
    // Защищаем от создания через unserialize
     private function __wakeup()  { /* ... @return Singleton */ }
    // Возвращает единственный экземпляр класса. @return Singleton
    public function doAction() { }
 }
 /* Применение*/
 Singleton::getInstance()->doAction(); 
?>

