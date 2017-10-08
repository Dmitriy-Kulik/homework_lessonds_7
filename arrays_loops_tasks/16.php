<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 06.10.2017
 * Time: 21:51
 */

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr as $item => $value){
    echo $value;

    if($item !== (count($arr)-1)){
        echo ", ";
    }
    if($item == 2 || $item == 5){
        echo "<br>";
    }
}