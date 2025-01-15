<?php
$file = fopen("students.txt","a+");
$text = fread($file,filesize("students.txt"));
echo($text);
fclose($file);
?>
