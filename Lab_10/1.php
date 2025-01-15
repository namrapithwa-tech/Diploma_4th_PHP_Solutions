<?php 
 
    $servername="localhost"; 
    $username="root"; 
    $password=""; 
    $dbname="diploma-4"; 
    $con=mysqli_connect($servername,$username,$password,$dbname); 
 
    if($con) 
    {
        echo "Connection Established Successfully!!"."<br/>"; 
        $query="CREATE TABLE Account (AccountNumber INT AUTO_INCREMENT PRIMARY KEY,Balance DECIMAL(10, 2) NOT NULL,Branch VARCHAR(50) NOT NULL)";
        $sql=mysqli_query($con,$query);
        if($sql)
        {
            echo "Table Account created successfully!!";
        }
    }
?>