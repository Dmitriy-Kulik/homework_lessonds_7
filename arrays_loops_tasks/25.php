<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 06.10.2017
 * Time: 22:37
 */
$arr = array();
$t = 0;
while ($t <= 5){
    $arr[$t] = rand(1, 100);
    $t++;
}
var_dump($arr);


$min = $arr[0];
foreach ($arr as $item=>$value){
    if($value < $min){
        $id = $item;
        $min = $value;
    }
}
echo "Минимальное значение: " . $min . "<br>";

$max = $arr[0];
$count = count($arr);
for($i = 0; $i < $count; $i++){

    if ($arr[$i] > $arr[0]) {
        $max = $arr[$i];
    }

}
echo "Миаксимальное значение: " . $max;

