<?php 
 
$servername="localhost"; 
$username="root"; 
$password=""; 
$dbname="Diploma-4"; 
$con=mysqli_connect($servername,$username,$password,$dbname); 
 
if($con) 
{ 
    $did= $_GET['did'];
    $query="DELETE FROM students WHERE stuid=?";

    $stmt=mysqli_prepare($con,$query); 
    mysqli_stmt_bind_param($stmt,'i',$did);
    $execute_Prepared=mysqli_stmt_execute($stmt);
    if($execute_Prepared) 
    {
        echo '<script> 
              alert("Record DELETED Successfully"); 
              window.location.href = "selectAll.php"; 
             </script>'; 
    }
}
?>
