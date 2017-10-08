<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 06.10.2017
 * Time: 21:52
 */

$arr = array("Понеділок", "Вівторок", "Середа", "Четвер", "П'ятниця", "Субота", "Неділя");
$day = "П'ятниця";
foreach ($arr as $value){
    if($value == $day){
        echo "<i>" . $value . "</i><br>";
    }
    else{
        echo $value . "<br>";
    }
}