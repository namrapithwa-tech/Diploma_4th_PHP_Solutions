<?php
function fact($number) {
    if ($number == 0) return 1;
    return $number * fact($number - 1);
}

$number = 5;
echo "Factorial of $number = " . fact($number);
?>
