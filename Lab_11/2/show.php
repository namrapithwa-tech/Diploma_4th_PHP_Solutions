<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Records</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Student ID</th>
            <th>Roll No</th>
            <th>Name</th>
            <th>Class</th>
            <th>Action</th>
        </tr>
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "diploma-4";

            $con = mysqli_connect($servername, $username, $password, $dbname);

            if ($con) {
                $sql = mysqli_query($con, "CALL student_select");

                while ($a = mysqli_fetch_array($sql)) {
            ?>
                    <tr>
                        <td><?php echo $a['stuid']; ?></td>
                        <td><?php echo $a['rno']; ?></td>
                        <td><?php echo $a['name']; ?></td>
                        <td><?php echo $a['class']; ?></td>
                        <td>
                            <a href="delete.php?did=<?php echo $a['stuid']; ?>">
                                <button>DELETE</button>
                            </a>
                            <a href="update.php?uid=<?php echo $a['stuid']; ?>">
                                <button>UPDATE</button>
                            </a>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
</body>
</html>
