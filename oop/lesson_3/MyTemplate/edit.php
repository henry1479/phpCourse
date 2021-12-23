<?php
include_once('inc/model.php');
include_once('inc/view.php');

// обработка формы

if(!empty($_POST)) 
{
    $text = $_POST['text'];
    text_set($text);
    header("Location:index.php");
    die();
}

// информация для отображения

$title = "Name of the page of Edit";
$text = text_get();


// внутренний шаблон

$content = view_include(
    "theme/v_edit.php",
    array('text'=>$text)
);

// Внешний шаблон
$page = view_include(
    "theme/v_main.php",
    array("title"=>$title, "content"=>$content)
);
// вывод

echo $page;


?>