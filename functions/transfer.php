<?php
function insuffientBalence($sender){

}
session_start(); 
include "../Database/db.php";
$acc_num = $_POST['acc_num'];
$currentUser = $_SESSION['loggenIn']; 

$query = "SELECT first_name, last_name, FROM users WHERE account_number ='$acc_num'";
$resp = mysqli_query($database, $query); 
$user = mysqli_fetch_assoc($resp);
if($user){
    if($currentUser['email']===$user['email']){
        header("Location: ../index.php?acc_err=Do you know what you're doing"); 
        return; 
    }
    $receiver = $user['email'];
    $_SESSION['receiver_email'] = $receiver;
    header("Location: ../index.php?acc_info=$user[first_name] $user[last_name]"); 
}else{
    header("Location: ../index.php?acc_err=The account does not exit");
}
?> 
