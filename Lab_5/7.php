<?php

function isPrime($n) {
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

$start = 10;
$end = 100;

echo "Prime numbers between $start and $end:<br/>";
for ($i = $start; $i <= $end; $i++) {
    if (isPrime($i)) {
        echo $i . "<br/>";
    }
}

?>
