<?php
    session_start();
    $valid_username = 'Darshan';
    $valid_password = 123456;
    if (isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
    if ($username == $valid_username && $password == $valid_password)
    {
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit();
    }
    else
    {
        echo 'Invalid username or password';
    }
    }
    else
    {
        header('Location: Login.php');
        exit;
 }
?>
