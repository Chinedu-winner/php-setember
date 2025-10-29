<?php
session_start(); 
include "database/database.php";
include "auth/loggedInUser.php";
$user = $_SESSION['loggenIn'];
$email = $auth_email['email'];

$query = "SELECT FROM users WHERE email='$email'";
$resp = mysqli_query($datebase, $query);
$user = mysqli_fetch_assoc($resp);
print_r($user);
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
    <div class="card w-50 mt-4 shadow mx-auto">
        <img src="image/120px-Sample_User_Icon.png" width='500px' height="500px" alt="">
        <form action="image/120px-Sample_User_Icon.png">
            <input name="download-pix" type="file">
            <button>Change</button>
        </form>
        <div>
            <h1>Name: <?php echo "$user[first_name] $user[last_name]"?></h1>
            <h1>Email: <?php echo $user ['email']?></h1>
            <h1>Account_no: <?php echo $user ['Account_number']?></h1>
            <!-- toLocaleString -->
            <h1>Wallet Balance: ₦<?php $user['amount']?></h1>
        </div>
    </div>
</body>
</html>