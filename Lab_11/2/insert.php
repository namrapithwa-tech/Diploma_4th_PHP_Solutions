<?php 

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "diploma-4"; 

$con = mysqli_connect($servername, $username, $password, $dbname);

if ($con) { 
    $rno = $_POST['rno']; 
    $name = $_POST['name']; 
    $class = $_POST['class']; 

    $sql = mysqli_query($con, "CALL student_insert($rno, '$name', '$class')");

    if ($sql) { 
        echo '<script>alert("Record Inserted")</script>'; 
        echo '<script>window.location.href="show.php"</script>'; 
    } else { 
        echo '<script>alert("Record Not Inserted")</script>'; 
    } 
} else { 
    echo "Connection Failed"; 
} 

?>
