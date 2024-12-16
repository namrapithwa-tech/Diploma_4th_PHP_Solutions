<!DOCTYPE html>
<html>
<head>
    <title>Sum of Numbers Divisible by 3 or 5</title>
</head>
<body>
    <h1>Enter Numbers</h1>
    <form action="" method="post">
        <label for="numbers">Enter numbers (separated by commas):</label>
        <input type="text" id="numbers" name="numbers" required>
        <br><br>
        <input type="submit" value="Calculate Sum">
    </form>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numbers = $_POST['numbers'];
        $array = array_map('intval', explode(',', $numbers));
        $sum = 0;

        foreach ($array as $num) {
            if ($num % 3 == 0 || $num % 5 == 0) {
                $sum += $num;
            }
        }
        echo "<h1>Sum of numbers divisible by 3 or 5: " . $sum . "</h1>";
    }
?>