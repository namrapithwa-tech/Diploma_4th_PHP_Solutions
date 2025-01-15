<?php
if (isset($_COOKIE['username']))
{
 $username = $_COOKIE['username'];
}
else
{
 header('Location: Login.php');
 exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo ($username); ?>!</h2>
    <a href="Login.php">Logout</a>

</body>
</html>
