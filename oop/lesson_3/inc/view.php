<?php

// подключние шаблона

// это шаблонизатор
function view_include($fileName, $vars = array())
{
    // установка переменных для шаблона
    foreach($vars as $key=>$value) 
    {
        $$key = $value;
    }
    ob_start();
    include $fileName;
    return ob_get_clean();
}



?>