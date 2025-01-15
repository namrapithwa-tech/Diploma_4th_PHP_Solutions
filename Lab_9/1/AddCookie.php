<?php
    $cookie_name="Diploma-4";
    $cookie_value="Darshan University";
    setcookie($cookie_name,$cookie_value,time()+30);
?>
<html>
<body>
<?php
    if(!isset($_COOKIE[$cookie_name]))
    {
        echo "Cookie named '".$cookie_name."' is set successfully";
    }
    else
    {
        echo "Cookie '".$cookie_name."' is updated!<br>";
        echo "Value is : ".$_COOKIE["$cookie_name"];
    }
?>
</body>
</html>
