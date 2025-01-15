<?php
    session_start();
?>
<html>
<body>
<?php
    //to update
    //to change a session variable,just overwrite it
    $_SESSION["Name"]="Namra";
    echo "Session variable are modified";
    $_SESSION["Subject"]="PHP";
?>
</body>
</html>