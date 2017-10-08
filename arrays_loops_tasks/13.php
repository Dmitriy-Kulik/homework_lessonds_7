<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 06.10.2017
 * Time: 21:04
 */
$a = 1;
$b = 1;
$res = 0;

while ($a <= 9){
    while ($b <= 9){
        $res = $a * $b;
        echo $a . " * " . $b . " = " . $res . "<br>";
        $b++;
    }
    $a++;
    $b = 1;
    echo "<br>";
}
