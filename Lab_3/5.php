<!-- 5. WAP that prompts the user to enter a letter and check 
whether a letter is a vowel or consonants. (C) -->

<?php
    $letter = "u";
    $vowels = array('a', 'e', 'i', 'o', 'u');
    if (in_array($letter,$vowels)) {
        echo "<p>The letter '$letter' is a vowel.</p>";
    } else {
        echo "<p>The letter '$letter' is a consonant.</p>";
    }
?>