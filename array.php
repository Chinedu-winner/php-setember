<?php
//Array is indexed 
//Array is mutable
$courses = ["HTML", "CSS", "Javascript", "Php", 'python'];
echo "My best course is $courses{0}";
echo $courses [1];
echo $courses [2];
echo $courses [3];
print_r($courses);

$courses[2] = 'Bootstrap';
print_r($courses);

//echo My best course is HTML
//echo My best course is CSS
//echo My best course is Javascript

//array_push()
array_push($courses, "Firebase", "React");

//To aviod repettion, that's when we introdue loop
for ($i=0; $i < count($courses); $i++) { 
    $element = $courses[$i];
    echo "<h1> My favourite course is $element </h1>";
}

$interesting_course = "$course[2] is interesting";
$interesting_course = '$course[2] is interesting';

foreach($courses as $element){
    echo "<h1>My favourite course is $element </h1>"; 
}

//-------CONTNUE----------
// while ($sa <= 10){
//     if($a=== 5){
//         $a++;
//         continue; 
//     }
//     echo $a;
//     $a++
// }

//-----------continue-------------

// ---------BREAK-------------------

$b = 0;
while ($b <= 10 ){
    if ($b == 5){
        break;
    }
    echo $b;
    $b++;

}

//------BREAK----------- 

//for each
//while loop 
//ASSIGNMENT

//Echo all the course using this format => My favourite course ... & it must be in an h1 tag
//Write a function that add  an element to your array 
//addcourse("Node")

//local variable
//global variable

$my_list = [];

$age = 12;
function addToArray($item){ 
    global $my_list; 
    array_push($my_list, $item);
}
addToArray('tre');
addToArray('Sleep');
addToArray('Code');
// echo $loc 

print_r($my_list); 

array_splice($my_list, 1, 1);

// unset($my_list[0]); removes from an array and will not reindex it. 

print_r($my_list);

$dark_model = 'on';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scahle=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $my_list[0]; ?></h1>
    <h1><?php echo $my_list[1]; ?></h1>
    <?php 
    if ($dark_model) {
        echo "<div style = ' width: 200px; height: 200px background-colour: black'></div>";
    } else {
        "<div style = ' width: 200px; height: 200px background-colour: blue'></div>";
    }?>

<!--create an empty list of hobbies-->
<!--Write a fuction that adds hobbies to the array-->
<!--function addHobies ($hobbies){
    Your choice goes here ...
}-->


<!--Write a function that will change the value of your array(edit)-->

</body>
</html>