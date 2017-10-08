<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 06.10.2017
 * Time: 21:51
 */

$month = "Жовтень";
$arrMonth = array("Січень", "Лютий", "Березень", "Квітень", "Травень", "Червень", "Липень", "Серпень", "Вересень", "Жовтень", "Листопад", "Грудень");
foreach ($arrMonth as $value){
    if($month == $value){
        echo "<b>" . $value . "</b><br>";
    }
    else{
        echo $value . "<br>";
    }
}