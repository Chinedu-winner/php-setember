<?Php
session_start();
if (isset($_SESSION["loggedIn"])){
    $isloggedIn = $_SESSION['loggedIn'];
    if($isloggedIn['token_exp']<time()){
        header("Location:".__DIR__."login.php"); 
        return;
    }
}else{
    echo "Please log in"; 
}
?>
