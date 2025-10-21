<?Php

session_start();
if (isset($_SESSION["loggedIn"])){
    $isloggedIn = $_SESSION['loggedIn'];
    if($isloggedIn['token_exp']<time()){
        header("Location:".__DIR__."/newFF/login.php"); 
        return;
    }
}else{
    header("Location: paystack.php");
}
