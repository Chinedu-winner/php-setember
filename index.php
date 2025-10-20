<?php
$greetings = "Welcome to Winner banking app";
$services =[
    "front end"=>['price'=> 2000, 'language'=>"JS"],
    'back end'=>['price'=>5000, "language"=>"PHP"]
    ]
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php include "components/navbar.html" ?>
    </nav>
    <h1>Welcome to my Banking App</h1>
    <h1>Add Funds</h1>
    <form action="services/paystack.php" method="post">
        <input name="amount" type="text">
        <button name="addFund">Add Funds</button>
    </form>
</body>
</html>