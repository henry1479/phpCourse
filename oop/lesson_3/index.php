<?php
// буфер - это место в памяти, куда можно временно что-то положить
// буфер вывода
// ob_start() сохранение вывода в буфере
// ob_end_flush() закрытие буфера и отправка
// ob_end_clean() удаление буфера

ob_start();
echo "<p>first output</p>";
ob_end_flush();

// получение текущего содержимое буфера
// ob_get_contents();
// ob_get_clean();

// динамические переменные

$id_menu =3;
$str = "active$id_menu";
$$str1;//$active3=1
if(isset($active3) ) {
    echo "Variable \${$str} exists and is equal $active3";
}



?>