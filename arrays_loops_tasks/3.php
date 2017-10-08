<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 01.10.2017
 * Time: 16:39
 */
$result = 0;
$arr = array(26, 17, 136, 12, 79, 15);
foreach ($arr as $value){
    $value *= $value;
    $result += $value;
    echo $value . "<br>";

}
echo "<br>" . "Сумма квадратов чисел из масива: " . $result;