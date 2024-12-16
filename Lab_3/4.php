<!-- 4. Write a program to calculate electricity bill using
 control structure. For first 50 units – Rs. 3.50/unit 
 For next 100 units – Rs. 4.00/unit For next 100 units – 
 Rs. 5.20/unit For units above 250 – Rs. 6.50/unit (B) -->

<?php
    $units = 175; // 1. 50  2.100   3.100  4.25
    $bill = 0;

    if ($units <= 50) {
        $bill = $units * 3.50; 
    } elseif ($units <= 150) {
        $bill = 50 * 3.50 + ($units - 50) * 4.00;
    } elseif ($units <= 250) {
        $bill = 50 * 3.50 + 100 * 4.00 + ($units - 150) * 5.20;
    } else {
        $bill = 50 * 3.50 + 100 * 4.00 + 100 * 5.20 + ($units - 250) * 6.50;
    }
    echo "The electricity bill for $units units is Rs. " . number_format($bill, 2) . "<br>";
?>
<!-- 1. WAP to take a value from user from 1-7 and display current day using switch case. (If 1-Monday, 2-Tuesday, etc….) (A)
2. WAP to nd a diameter from given area of circle. (A)
3. WAP to make a Simple Calculator using switch...case. (B)
4. Write a program to calculate electricity bill using control structure. For first 50 units – Rs. 3.50/unit 
For next 100 units – Rs. 4.00/unit For next 100 units – Rs. 5.20/unit For units above 250 – Rs. 6.50/unit (B)
5. WAP that prompts the user to enter a letter and check whether a letter is a vowel or consonants. (C) -->
