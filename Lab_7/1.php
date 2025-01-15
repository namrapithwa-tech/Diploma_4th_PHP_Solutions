<!DOCTYPE html>
<html>
<body>
    <form method="post">
        Name: <input type="text" name="name"><br>
        Email: <input type="text" name="email"><br>
        Mobile: <input type="text" name="mobile"><br>
        <input type="submit" value="Validate" name="submit">
    </form>
</body>
</html>

<?php
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $error = [];

    if (!preg_match("/^[a-zA-Z ]{2,20}$/", $name)) {
        $errors[] = "Invalid name. Only alphabets and spaces allowed (2-20 characters).";
    }
    if (!preg_match("/^[\w\-\.]+@([\w\-]+\.)+[a-zA-Z]{2,7}$/", $email)) {
        $errors[] = "Invalid email format.";
    }
    if (!preg_match("/^\d{10}$/", $mobile)) {
        $errors[] = "Invalid mobile number. It must be a 10-digit number.";
    }

    if (empty($errors)) {
        echo "Validation successful.";
    } else {
        foreach ($errors as $error) {
            echo "<h3 style='color:red'>$error</h3><br>";
        }
    }
}
?>
