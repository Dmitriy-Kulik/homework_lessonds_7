<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 06.10.2017
 * Time: 22:37
 */
$num = 12345;
$res = 0;
if(!$num == 0){
    while ($num > 0){
        $res = $res + $num % 10;
        $num /= 10;
    }
    echo $res;
}
else{
    echo "Введите коректное число!";
}