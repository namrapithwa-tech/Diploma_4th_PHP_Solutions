<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "diploma-4";

$con = mysqli_connect($servername, $username, $password, $dbname);

if ($con) {
    $query = "INSERT INTO students (rno, name, class) VALUES (?, ?, ?)";
    $statement = mysqli_prepare($con, $query);

    mysqli_stmt_bind_param($statement, 'iss', $rno, $name, $class);
    $rno = 101;
    $name = "Darshan";
    $class = "DIPLOMA";
    mysqli_stmt_execute($statement);

    $rno = 102;
    $name = "Namra";
    $class = "B.Tech";
    mysqli_stmt_execute($statement);

    echo "Records Inserted Successfully Using Prepared Statement";
} else {
    echo "Connection Failed";
}
?>
