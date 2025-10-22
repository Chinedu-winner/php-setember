 <?php
session_start(); 

require "../vendor/autoload.php";
include "../Database/db.php";

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . "/../"); 
$dotenv->load();

$secret_key = $_ENV["PAYSTACK_SECERT_KEY"]; 

if(isset($_SESSION['loggined'])){
    $loggedInUser= $_SESSION["loggedIn"];
    $email = $loggedInUser['email']; 
    $user_query = "SELECT * FROM users WHERE email='$email'";
    $query_resp = mysqli_query($database, $user_query);
    
}