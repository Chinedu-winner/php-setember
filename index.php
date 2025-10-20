<?php
//VARIABLE DECLARATION 
$greeting = "Welcome to PHP September Cohert";
$student_name = "Daniel <br/>";
echo strlen($greeting);
//modify string
//str_replace($greeting, "php","sql");
$new_string = str_replace('world', "monkey", $greeting);
$new_string2 = str_replace("Ayomide", "itzchioma", $student_name);
$space = " "; 

echo "<br>{$new_string}</br>{$new_string2}";
$is_available = true;
$is_available = false;
$hobbies = [];
$min = 18;
$not_decided = null; 
//UNDEFINED
$takevalue;
//$details = {} This is not an object in php interpolation

//echo $greeting, 
//CHECK REPEAT, TRIUMP, UPPER TO LOWER, PAD_START, PAD_END, STR POSITION, STR WORDCOUNT, CHECK EXPLODE, STRING_REVERSE, SUB str 