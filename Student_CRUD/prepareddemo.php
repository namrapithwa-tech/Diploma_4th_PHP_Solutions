<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "diploma-4";

$con = mysqli_connect($servername, $username, $password, $dbname);

if (!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}

$insertQuery = "INSERT INTO students (rno, name, class) VALUES (?, ?, ?)";
$statement = mysqli_prepare($con, $insertQuery);
mysqli_stmt_bind_param($statement, 'iss', $rno, $name, $class);

$rno = 103;
$name = "Aarav";
$class = "BCA";
mysqli_stmt_execute($statement);

$rno = 104;
$name = "Krisha";
$class = "MCA";
mysqli_stmt_execute($statement);

echo "Records Inserted Successfully.<br>";

$selectQuery = "SELECT * FROM students";
$result = mysqli_query($con, $selectQuery);

echo "<h3>Student Records:</h3>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "Roll No: " . $row['rno'] . " | Name: " . $row['name'] . " | Class: " . $row['class'] . "<br>";
}

// $updateQuery = "UPDATE students SET class = 'B.Tech' WHERE rno = 103";
// if (mysqli_query($con, $updateQuery)) {
//     echo "Record Updated Successfully.<br>";
// } else {
//     echo "Error Updating Record: " . mysqli_error($con) . "<br>";
// }

// $deleteQuery = "DELETE FROM students WHERE rno = 103";
// if (mysqli_query($con, $deleteQuery)) {
//     echo "Record Deleted Successfully.<br>";
// } else {
//     echo "Error Deleting Record: " . mysqli_error($con) . "<br>";
// }

mysqli_close($con);
?>
