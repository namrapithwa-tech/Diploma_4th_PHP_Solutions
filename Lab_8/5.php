<?php
$employees = [
    ['empno' => 1, 'name' => 'John Doe', 'gender' => 'Male', 'mobileno' => '1234567890'],
    ['empno' => 2, 'name' => 'Jane Smith', 'gender' => 'Female', 'mobileno' => '0987654321'],
    ['empno' => 3, 'name' => 'Jim Brown', 'gender' => 'Male', 'mobileno' => '1122334455']
];
$file = fopen('employees.txt', 'w');
foreach ($employees as $key => $employee) {
    $line = implode(", ", $employee);
        fwrite($file, $line . "<br>");
    }
    fclose($file);
    echo "File 'employees.txt' created successfully!"."<br>";
$file = fopen("employees.txt","a+");
$text = fread($file,filesize("employees.txt"));
echo($text);
fclose($file);
?>
