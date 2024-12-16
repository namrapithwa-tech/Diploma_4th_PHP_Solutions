<?php

function check($n) {
    if ($n <= 1) {
        return 0;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return 0;
        }
    }
    return 1;
}

$number = 13;

if (check($number)) {
    echo "$number is a prime number.<br/>";
} else {
    echo "$number is not a prime number.<br/>";
}

?>
