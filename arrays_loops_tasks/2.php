<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 01.10.2017
 * Time: 16:39
 */
$result = 0;
$arr = array(1, 20, 15, 17, 24, 35);
foreach ($arr as $value){
    $result += $value;
    echo $value . "<br>";
}

echo "<br>" . "Сумма чисел масива: " . $result;