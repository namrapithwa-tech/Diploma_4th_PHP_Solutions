<?php

    $num1 = 10;
    $num2 = 5;
    $operator = '+';

    $result = 0;

    switch ($operator) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                echo "Cannot divide by zero.";
            }
            break;
        default:
            echo "Invalid operator.";
    }

    echo "Result: $result";
?>