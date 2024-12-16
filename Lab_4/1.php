<!DOCTYPE html>
<html>
<head>
    <title>Print Numeric Array</title>
</head>
<body>
    <h1>Numeric Array</h1>
    <?php
    $numericArray = array(10, 20, 30, 40, 50);

    echo "<ul>";
    foreach ($numericArray as $value) {
        echo "<li>" . $value . "</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
