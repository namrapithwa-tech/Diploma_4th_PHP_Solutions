<?php 
 
$servername="localhost"; 
$username="root"; 
$password=""; 
$dbname="Diploma-4"; 
$con=mysqli_connect($servername,$username,$password,$dbname); 
 
if($con) 
{ 
    $uid=$_GET['uid'];
    if(isset($_POST['submit']))
    {
        $rno = $_POST['rno'];
        $name = $_POST['name'];
        $class = $_POST['class'];
        $query="UPDATE students SET rno=?, name=?, class=? WHERE stuid=?";
        $stmt=mysqli_prepare($con,$query);
        mysqli_stmt_bind_param($stmt,'issi',$rno,$name,$class,$uid);
        $execute_Prepared=mysqli_stmt_execute($stmt);
        if($execute_Prepared)
        {
            echo '<script> 
                  alert("Record Updated Successfully"); 
                  window.location.href = "selectAll.php"; 
                 </script>'; 
        }
        else
            {
                echo '<script> 
                    alert("Record Not Updated Successfully"); 
                    </script>';  
            }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
</head>
<body>
    <?php
    $query="SELECT * FROM students WHERE stuid=$uid";
    $sql=mysqli_query($con,$query);
    $row=mysqli_fetch_array($sql);
    ?>
    <form method="POST">
       Enter Roll Number: <br/>
        <input type="text" name="rno" value="<?php echo $row['rno'];?>" ><br/>
        Enter Student Name: <br/>
        <input type="text" name="name" value="<?php echo $row['name'];?>" ><br/>
        Enter Class: <br/>
        <input type="text" name="class" value="<?php echo $row['class'];?>" ><br/>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>
