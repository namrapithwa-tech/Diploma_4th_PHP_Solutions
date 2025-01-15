<?php 
 
 $servername="localhost"; 
 $username="root"; 
 $password=""; 
 $dbname="diploma-4"; 
 $con=mysqli_connect($servername,$username,$password,$dbname); 
 
 if($con) 
 { 
    $empid = $_POST['empid'];
    $empname = $_POST['empname'];
    $empemail = $_POST['empemail'];
    $empphone = $_POST['empphone'];

    $query="INSERT INTO employee(empid,empname,empemail,empphone) VALUES ($empid,'$empname','$empemail','$empphone')"; 
 
  $sql=mysqli_query($con,$query); 
  if($sql) 
  { 
   echo '<script> 
                  alert("Record Inserted Successfully"); 
                  window.location.href = "EmployeeReg.php"; 
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