<?php
$students = ["Namra","Pithwa"];
$file = fopen('students.txt', 'w');
foreach ($students as $student) {
        fwrite($file, $student . "  ");
    }
    fclose($file);
    echo "File 'students.txt' created successfully!";
?>
