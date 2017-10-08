<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 01.10.2017
 * Time: 16:40
 */
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = array();
$ru = array();
foreach ($arr as $key=> $value){
    $en [] = $key;
    $ru [] = $value;
}
print_r ($en);
echo "<br>";
print_r ($ru);
echo "<br>";
var_dump($en);
var_dump($ru);
