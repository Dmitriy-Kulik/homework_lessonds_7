<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 06.10.2017
 * Time: 22:37
 */

$arr = [];
$arr1 =[];
$arr2 =[];

$t = 0;
while ($t <= 10){
    $arr[$t] = rand(1, 100);
    $t++;
}
var_dump($arr);

$op = 1;
echo "Элементы масива с не парными индексами: ";
foreach ($arr as $index => $value){
    if($value > 0 && !($index % 2) && !($index == 0)){
        $op *= $value;
    }
    if($value > 0 && ($index % 2) && !($index == 0)){
        $arr2[$index] = $value;
        echo  $value;
        if($index !== (count($arr)-1)){
            echo ", ";
        }
    }
}

echo "<br>" . "Произведение элементов массива с парными: " . $op . "<br><br>";
