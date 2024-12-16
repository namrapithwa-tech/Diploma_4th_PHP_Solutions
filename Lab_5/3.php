<?php
function calculateSimpleInterest($principal, $rate, $time) {
    return ($principal * $rate * $time) / 100;
}

$principal = 1000;
$rate = 5;
$time = 2;

$interest = calculateSimpleInterest($principal, $rate, $time);
echo "The simple interest is Rs. $interest <br/>";
?>
