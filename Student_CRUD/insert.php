<?php 
 
$servername="localhost"; 
$username="root"; 
$password=""; 
$dbname="student_crud"; 
$con=mysqli_connect($servername,$username,$password,$dbname); 
 
if($con) 
{ 
    $rno = $_POST['rno'];
    $name = $_POST['name'];
    $class = $_POST['class'];

    $query="INSERT INTO students( rno, name, class) 
    VALUES ('$rno', '$name', '$class')"; 
 
    $sql=mysqli_query($con,$query); 
    if($sql) 
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
