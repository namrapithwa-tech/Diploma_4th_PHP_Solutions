<?php 
 
$servername="localhost"; 
$username="root"; 
$password=""; 
$dbname="student_crud"; 
$con=mysqli_connect($servername,$username,$password,$dbname); 
 
if($con) 
{ 
    $did= $_GET['did'];
    $query="DELETE FROM students WHERE stuid=$did";
    $result=mysqli_query($con,$query);
    if($result)
    {
        echo '<script> 
              alert("Record DELETED Successfully"); 
              window.location.href = "selectAll.php"; 
             </script>'; 
    }
}
?>
