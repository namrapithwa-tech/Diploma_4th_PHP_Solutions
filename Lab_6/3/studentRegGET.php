<html>
<head>
    <title>Student Registration Form</title>
</head>
<body>
    <h2>Student Registration Form</h2>
    <form action="con_studentRegGET.php" method="get">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>

        
        <label>Gender:</label><br>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Female</label><br><br>


        <label>Courses:</label><br>
        <input type="checkbox" id="course1" name="courses[]" value="Math">
        <label for="course1">Math</label><br>
        <input type="checkbox" id="course2" name="courses[]" value="Science">
        <label for="course2">Science</label><br>
        <input type="checkbox" id="course3" name="courses[]" value="History">
        <label for="course3">History</label><br><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>
