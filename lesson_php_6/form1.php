<form action="server.php" method="post">
    <input type="number" name="num_1" value=<?=$_GET['num_1'];?>>
        <select name="operation" >
            Выберете операцию
            <option checked>Сложение</option>
            <option>Вычитание</option>
            <option>Умножение</option>
            <option>Деление</option>
        </select>
    <input type="number" name="num_2" value=<?=$_GET['num_2'];?> >
    <input type="submit" value="Расчитать">
           
</form>
<?php
    if($_GET['result']):?>
        <p>Результат: <?=$_GET['result'];?></p>
<?php
    endif;
?>