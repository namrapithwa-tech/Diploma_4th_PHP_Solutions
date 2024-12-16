<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Io</title>
</head>
<body>
    <form method="post">
        <input type="text" name="name1">
        <input type="text" name="surname">
        <input type="submit" value="Submit" 
        name="sub">
    </form>

    <?php

        if(isset($_POST["sub"])) {
            $name=$_POST['name1'];
            $surname=$_POST['surname'];
            echo $name." ". $surname;
        }
    ?>
</body>
</html>

