<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 06.10.2017
 * Time: 21:51
 */

$arr = array("Понеділок", "Вівторок", "Середа", "Четвер", "П'ятниця", "Субота", "Неділя");
foreach ($arr as $value){
    if($value == "Субота" || $value == "Неділя"){
        echo "<b>" . $value . "</b><br>";
    }
    else{
        echo $value . "<br>";
    }
}