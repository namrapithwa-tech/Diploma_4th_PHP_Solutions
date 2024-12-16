<!DOCTYPE html>
<html>
<head>
    <title>Print Multidimensional Array</title>
</head>
<body>
    <h1>Multidimensional Array</h1>
    <?php
    $multidimensionalArray = array(
        array("Apple", "Banana", "Cherry"),
        array("Red", "Yellow", "Blue"),
        array(1, 2, 3)
    );

    echo "<ul>";
    foreach ($multidimensionalArray as $subArray) {
        echo "<li>";
        echo "<ul>";
        foreach ($subArray as $value) {
            echo "<li>" . $value . "</li>";
        }
        echo "</ul>";
        echo "</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
