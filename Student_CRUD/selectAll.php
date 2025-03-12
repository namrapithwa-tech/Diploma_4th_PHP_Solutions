<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Students Data</title>
</head>
<body>
    <a href="form.php"><button style="background: cyan;">Add New Student</button></a>
<table border="1"> 
    <tr> 
        <th>Student ID</th>
        <th>Roll Number</th>
        <th>Name</th>
        <th>Class</th>
        <th>Operation</th>
    </tr> 
 
    <tbody> 
    <?php 
        $servername="localhost"; 
        $username="root"; 
        $password=""; 
        $dbname="student_crud"; 
        $con=mysqli_connect($servername,$username,$password,$dbname); 
        if($con) 
        { 
            $query="SELECT * FROM students"; 
            $sql=mysqli_query($con,$query); 
            
            while($row=mysqli_fetch_array($sql))
            { 
                ?> 
                <tr> 
                <td><?php echo $row['stuid'] ?></td> 
                <td><?php echo $row['rno'] ?></td> 
                <td><?php echo $row['name'] ?></td> 
                <td><?php echo $row['class'] ?></td> 
                <td><a href="update.php?uid=<?php echo $row['stuid'] ?>">
                    <button style="background: green;">✏️Edit</button>
                </a> 
                <a href="delete.php?did=<?php echo $row['stuid'] ?>">
                    <button style="background: red;">🚮Delete</button>
                </a></td>
                </tr> 
                
                <?php 
            } 
        } 
        else 
        { 
            echo "Connection Failed"; 
        } 
    ?> 
    </tbody> 
</table> 
</body>
</html>
