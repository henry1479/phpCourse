<?php
    print_r($_POST);
    $num_1 = $_POST['num_1'];
    $num_2 = $_POST['num_2'];
    $operation = $_POST['operation'];
    


    function sum ($num_1,$num_2) {
        return $num_1 + $num_2;
    }

    function take ($num_1,$num_2) {
        return $num_1 - $num_2;
    }

    function multiply ($num_1,$num_2) {
        return $num_1 * $num_2;
    }

    function apart ($num_1,$num_2) {
        return $num_1 / $num_2;
    }

    
    
function getResult($operation,$num_1,$num_2){
    switch($operation) {
        case 'Сложение':
            return sum($num_1,$num_2);
            break;
        case 'Вычитание':
            return take($num_1,$num_2);
            break;
        case 'Умножение':
            return multiply($num_1,$num_2);
            break;
        case 'Деление':
            return apart($num_1,$num_2);
            break;
        default:
            $res = "Выберете операцию";
            return $res;
    }

}

$res = getResult($operation,$num_1,$num_2);

    if($res) {
        header("Location:index.php?result=$res&num_1=$num_1&num_2=$num_2");
    }


?>