<!DOCTYPE html>
<html>
<head>
    <title>Print Associative Array</title>
</head>
<body>
    <h1>Associative Array</h1>
    <?php
    $associativeArray = array(
        "first_name" => "John",
        "last_name" => "Doe",
        "age" => 30,
        "occupation" => "Developer"
    );

    echo "<ul>";
    foreach ($associativeArray as $key => $value) {
        echo "<li>" . $key . ": " . $value . "</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
