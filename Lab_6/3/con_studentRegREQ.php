<?php
    $name = isset($_REQUEST['name']) ? $_REQUEST['name'] : '';
    $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : '';
    $password = isset($_REQUEST['password']) ? $_REQUEST['password'] : '';
    
    echo "<h2>Retrieved using REQUEST method:</h2>";
    echo "Name: " . ($name) . "<br>";
    echo "Email: " . ($email) . "<br>";
    echo "password: " . ($password) . "<br>";
?>