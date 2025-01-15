<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "diploma-4";

$con = mysqli_connect($servername, $username, $password, $dbname);

$did = $_GET['did'];

if ($con) {
    $sql = mysqli_query($con, "CALL student_delete($did)");

    if ($sql) {
        echo '<script>alert("Record Deleted")</script>';
        echo '<script>window.location.href="show.php"</script>';
    } else {
        echo "Record not deleted";
    }
} else {
    echo "Connection Failed";
}
?>
