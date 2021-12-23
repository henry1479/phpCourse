<?php

//** Основной шаблон */


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
</head>
<body>
    <div id="header">
        <h1><?=$title?></h1>
    </div>
    <div id="menu">
        <a href="index.php" class="href">Read the text</a>
        <a href="edit.php" class="href">Edit the text</a>
    </div>

    <div id="content">
        <?=$content?>
    </div>

    <div id="footer">
        All rights reserved. Adress. Telphone
    </div>
    
</body>
</html>