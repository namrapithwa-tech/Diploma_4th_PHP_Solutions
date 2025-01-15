<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration Form</title>
</head>
<body>
    <form action="conEmp.php" method="POST">
        Enter Employee Id: <br/>
        <input type="text" name="empid" required><br/>
        Enter Employee Name: <br/>
        <input type="text" name="empname" required><br/>
        Enter Employee Email: <br/>
        <input type="text" name="empemail" required><br/>
        Enter Employee Number: <br/>
        <input type="text" name="empphone" required><br/>
        <input type="submit" value="Submit">
    </form>
</body>
</html>