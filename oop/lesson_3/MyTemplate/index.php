<?php
    include_once('inc/model.php');
    include_once('inc/view.php');


    // информация  для отображения

    $title = "name of the site";
    $text = text_get();

    // внутренний шаблон

    $content = view_include(
        'theme/v_index.php',
        array('text'=> $text)
    );

    // внешний шаблон

    $page = view_include(
        'theme/v_main.php',
        array('title'=>$title, 'content'=> $content)
    );

    //вывод
    echo $page;
?>