<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
</head>
<body>
    <form action="insert.php" method="POST">
        Enter Roll Number: <br/>
        <input type="text" name="rno" required><br/>
        Enter Student Name: <br/>
        <input type="text" name="name" required><br/>
        Enter Class: <br/>
        <input type="text" name="class" required><br/>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>
