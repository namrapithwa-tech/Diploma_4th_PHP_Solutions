<!DOCTYPE html>
<html>
<body>
    <h1>Student Registration Form</h1>
    <form method="post">
        Name: <input type="text" name="name"><br>
        Email: <input type="text" name="email"><br>
        Mobile: <input type="text" name="mobile"><br>
        Password: <input type="password" name="password"><br>
        Course: <input type="text" name="course"><br>
        <input type="submit" value="Register" name="submit">
    </form>
</body>
</html>


<?php
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];
    $course = $_POST["course"];
    $errors = [];

    // Validate Name
    if (!preg_match("/^[a-zA-Z ]{2,30}$/", $name)) {
        $errors[] = "Invalid name. Only alphabets and spaces allowed (2-30 characters).";
    }

    // Validate Email
    if (!preg_match("/^[\w\-\.]+@([\w\-]+\.)+[a-zA-Z]{2,7}$/", $email)) {
        $errors[] = "Invalid email format.";
    }

    // Validate Mobile
    if (!preg_match("/^\d{10}$/", $mobile)) {
        $errors[] = "Invalid mobile number. It must be a 10-digit number.";
    }

    // Validate Password
    if (!preg_match("/^.{6,}$/", $password)) {
        $errors[] = "Password must be at least 6 characters long.";
    }

    // Validate Course
    if (!preg_match("/^[a-zA-Z ]{2,30}$/", $course)) {
        $errors[] = "Invalid course name. Only alphabets and spaces allowed (2-30 characters).";
    }

    // Output Results
    if (empty($errors)) {
        echo "<h2>Validation successful!</h2>";
        echo "Name: $name<br>";
        echo "Email: $email<br>";
        echo "Mobile: $mobile<br>";
        echo "Password: $password<br>";
        echo "Course: $course<br>";
    } else {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>
