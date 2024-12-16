<?php
    $f1 = 10;
    $s1 = 40;
    $t1 = 50;

    if ($f1 > $s1 && $f1 > $t1 && $f1 != $s1) {
        echo "First Number Is Gretest Number";
    } elseif ($s1 > $t1 && $s1 > $f1 && $s1 != $t1 && $f1 != $s1) {
        echo "Second Number Is Greatest Number";
    } elseif ($t1 > $f1 && $t1 > $s1 && $t1 != $f1 && $s1 != $t1 && $f1 != $s1) {
        echo "Third Number Is Greatest Number";
    } else {
        echo "Two Or More Than Two Are Same";
    }
?>

<!-- 5. WAP to convert temperature from Fahrenheit to Celsius. (B)  
($temp-32) * (5/9); -->