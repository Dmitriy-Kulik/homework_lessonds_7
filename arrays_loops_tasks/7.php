<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 01.10.2017
 * Time: 16:40
 */
$arr = array(2, 5, 9, 15, 0, 4);
foreach ($arr as $value){
    if($value > 3 && $value < 10){
        echo $value . "<br>";
    }
}