<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 01.10.2017
 * Time: 16:40
 */
$arr = array('Коля'=>'200', 'Петя'=>'300', 'Вася'=>'400');
foreach ($arr as $key => $value){
    echo  $key . " — зарплата " . $value . " долларов.<br>";
}