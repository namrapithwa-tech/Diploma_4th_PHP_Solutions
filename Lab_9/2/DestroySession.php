<?php
    session_start();
?>
<html>
<body>
<?php
    //remove all session variable
    session_unset();
    //destroy the session
    session_destroy();
    echo "Session is Destroy......";
?>
</body>
</html>