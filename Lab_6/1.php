<?php
function sum($num)
{
    return array_sum(range(1, $num));
}

$num = 7;
$result = sum($num);
echo "The sum of the first $num numbers is: $result";
?>
