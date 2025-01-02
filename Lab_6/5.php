<?php
function isPrime($number, $divisor = null) {
    if ($number <= 1) {
        return false; 
    }
    if ($divisor === null) {
        $divisor = $number - 1;
    }
    if ($divisor == 1) {
        return true; 
    }
    if ($number % $divisor == 0) {
        return false; 
    }
    return isPrime($number, $divisor - 1);
}

$number = 7;
if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}
?>
