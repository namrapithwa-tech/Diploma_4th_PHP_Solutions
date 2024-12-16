<?php
// Without argument and without return
function calculatorWithoutArgWithoutReturn() {
    $a = 10;
    $b = 5;
    echo "Addition: " . ($a + $b) . "<br/>";
    echo "Subtraction: " . ($a - $b) . "<br/>";
    echo "Multiplication: " . ($a * $b) . "<br/>";
    echo "Division: " . ($a / $b) . "<br/>";
}
calculatorWithoutArgWithoutReturn();

// With argument and without return
function calculatorWithArgWithoutReturn($a, $b) {
    echo "Addition: " . ($a + $b) . "<br/>";
    echo "Subtraction: " . ($a - $b) . "<br/>";
    echo "Multiplication: " . ($a * $b) . "<br/>";
    echo "Division: " . ($a / $b) . "<br/>";
}
calculatorWithArgWithoutReturn(15, 3);

// Without argument and with return
function calculatorWithoutArgWithReturn() {
    $a = 20;
    $b = 4;
    return [
        'Addition' => $a + $b,
        'Subtraction' => $a - $b,
        'Multiplication' => $a * $b,
        'Division' => $a / $b
    ];
}
$result = calculatorWithoutArgWithReturn();
foreach ($result as $operation => $value) {
    echo $operation . ": " . $value . "<br/>";
}

// With argument and with return
function calculatorWithArgWithReturn($a, $b) {
    return [
        'Addition' => $a + $b,
        'Subtraction' => $a - $b,
        'Multiplication' => $a * $b,
        'Division' => $a / $b
    ];
}
$result = calculatorWithArgWithReturn(25, 5);
foreach ($result as $operation => $value) {
    echo $operation . ": " . $value . "<br/>";
}
?>
