<?php 
 
$servername="localhost"; 
$username="root"; 
$password=""; 
$dbname="Diploma-4"; 
$con=mysqli_connect($servername,$username,$password,$dbname); 
 
if($con) 
{ 
    $rno = $_POST['rno'];
    $name = $_POST['name'];
    $class = $_POST['class'];

    $query="INSERT INTO students( rno, name, class) 
    VALUES (?,?,?)";
 
    $stmt=mysqli_prepare($con,$query); 
    mysqli_stmt_bind_param($stmt,'iss',$rno,$name,$class);
    $execute_Prepared=mysqli_stmt_execute($stmt);
    if($execute_Prepared) 
    { 
        echo '<script> 
                  alert("Record Inserted Successfully"); 
                  window.location.href = "selectAll.php"; 
                </script>'; 
    } 
    else 
    { 
        echo '<script>alert("Record Not Inserted")</script>'; 
    } 
} 
else 
{ 
    echo "Connection Failed"; 
} 
  
?>
