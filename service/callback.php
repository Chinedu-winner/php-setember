 <?php
// session_start(); 

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
    $user = mysqli_fetch_assoc($query_resp);
}

if (isset($_GET['reference'])){
    die ('Sommething went wrong with the payment'); 
    header("Location: ../index.php"); 
}
$ref = $_GET['reference'];

echo rawurlencode("Dowie");
$url = "https://api.paystack.co/transaction/verify/";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
  "Authorization: Bearer $secret_key",
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

$result = json_decode($response, true);
print_r($result); 
if($result['status']==true){
    $amount = $result['data']['amount'];
    $new_amount = $user['amount'] + $amount;
try{
    $query= "UPDATE user SET amount = '$new_amount' WHERE email = '$email'";
    $query_amount_resp = mysqli_query($database, $query);
    if ($query_amount_resp) {
        header("Location:../index.php");
    }
}catch(\Exception $th){
    echo "Something went wrong" . $th->getMessage();
}
}