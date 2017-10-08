<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 01.10.2017
 * Time: 16:39
 */
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

echo "<br>" . "Ключи: " . "<br>";
foreach ($arr as $key => $value){
    echo $key . "<br>";
}
echo "<br>" . "Значения: " . "<br>";
foreach ($arr as $key => $value){
    echo $value . "<br>";
}

