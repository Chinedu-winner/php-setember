<?php
session_start();


include "./auth/loggedInUser.php";
include "../datebase.datebase.php";

require '../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__); 
$dotenv->load();

$authUser = $_SESSION['loggenIn'];
$email = $_SESSION['email'];
//Implementing Paystack
$amount = $_POST['amount'];
echo $amount; 

$secret_key = $_ENV['PAYSTACK_SECRET_KEY']; 
//This url is used to initalize payment