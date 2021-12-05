<form action="serverTask2.php" method="post">
            <input type="number" name="num_1" value=<?=$_GET['num_1'];?>>
            <input type="number" name="num_2" value=<?=$_GET['num_2'];?> >
            <input type="submit" name="oper[]" value="Сложение">
            <input type="submit" name="oper[]" value="Вычитание">
            <input type="submit" name="oper[]" value="Умножение">
            <input type="submit" name="oper[]" value="Деление">
           
</form>
<?php
            if($_GET['result_1']):?>
                <p>Результат: <?=$_GET['result_1'];?></p>
        <?php
            endif;
?>