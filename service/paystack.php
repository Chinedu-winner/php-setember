<?php
session_start();    

// include "../auth/loggedInUser.php";
// include "../Database/db.php";

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
try{
    $url = "https://api.paystack.co/transaction/initialize";
    $fields = [
        'email'=> $email,
        'amount'=> $amount, 
        'callback'=> 'http://localhost:8000/callback.php',
    ]; 
    echo $email;  
    $fields_string = http_build_query($fields); 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
  "Authorization: Bearer $secret_key",
  "Cache-Control: no-cache",
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
print_r($result);
curl_close($ch);

$response = json_decode($result, true);
$pay_url = $response['data']['authorization_url'];
echo $pay_url; 
// header("location: $pay_url"); 

}catch(\Exception $th){
    echo $th->getMessage() . "From catch"; 
}