<?php
// Without argument and without return
function printNameWithoutArgWithoutReturn() {
    echo "Namra Pithwa<br/>";
}
printNameWithoutArgWithoutReturn();

// With argument and without return
function printNameWithArgWithoutReturn($name) {
    echo $name . "<br/>";
}
printNameWithArgWithoutReturn("Namra Pithwa"); 

// Without argument and with return
function printNameWithoutArgWithReturn() {
    return "Namra Pithwa<br/>";
}
echo printNameWithoutArgWithReturn();

// With argument and with return
function printNameWithArgWithReturn($name) {
    return $name . "<br/>";
}
echo printNameWithArgWithReturn("Namra Pithwa");
?>
