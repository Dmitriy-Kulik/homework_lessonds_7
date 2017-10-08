<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 06.10.2017
 * Time: 21:51
 */
$arr = array(4, 2, 5, 19, 13, 0, 10);
$count = 0;
foreach ($arr as $value){
    $count++;
}
echo "В масиве " . $count . " элементов.";