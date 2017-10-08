<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 06.10.2017
 * Time: 21:36
 */
$arr = array(4, 2, 5, 19, 13, 0, 10);

foreach ($arr as $value){
    if($value == 2 ||$value == 3 || $value == 4){
        echo  "Усть!";
        break;
    }
    echo  "Нет!";
    break;
}
