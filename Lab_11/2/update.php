<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "diploma-4"; 

$con = mysqli_connect($servername, $username, $password, $dbname); 

$uid = $_GET['uid']; 
if ($con) { 
    if (isset($_POST['submit'])) { 
        $rno = $_POST['rno']; 
        $name = $_POST['name']; 
        $class = $_POST['class']; 

        $sql = mysqli_query($con, "CALL student_update($uid, $rno, '$name', '$class')"); 

        if ($sql) { 
            echo '<script>alert("Record Updated")</script>'; 
            echo '<script>window.location.href="show.php"</script>'; 
        } else { 
            echo "Record not Updated"; 
        } 
    } 
} else { 
    echo "Connection Failed"; 
}  
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
</head>
<body>
    <?php 
    $sql = mysqli_query($con, "CALL student_selectbyid($uid)"); 
    $data = mysqli_fetch_array($sql); 
    ?> 

    <form method="post"> 
        <label for="rno">Enter Roll No:</label>
        <input type="text" id="rno" name="rno" value="<?php echo $data['rno']; ?>"><br><br> 

        <label for="name">Enter Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $data['name']; ?>"><br><br> 

        <label for="class">Enter Class:</label>
        <input type="text" id="class" name="class" value="<?php echo $data['class']; ?>"><br><br> 

        <input type="submit" name="submit" value="Update"> 
    </form> 
</body>
</html>
