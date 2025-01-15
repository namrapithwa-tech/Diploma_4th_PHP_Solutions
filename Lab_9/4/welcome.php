<?php
session_start();
if (!isset($_SESSION['username']))
{
 header("Location: Login.php");
 exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Welcome</title>
</head>
<body>
<?php
print_r($_SESSION);
?>
 <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
 <p><a href="Login.php">Logout</a></p>
</body>
</html>