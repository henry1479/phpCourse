<?php
include_once "./admin/Template.php";
include_once "./site/Tempalte.php";
// используем алиас
use \admin\Template as admin;
// указываем путь до виртуальной папки
$obj = new admin\Template();
$obj1 = new \site\Template\Template();
$obj -> render();
?>