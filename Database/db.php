<?php
$database = mysqli_connect("localhost", "root", "", "bank-app");  

if($database){
    echo 'connected';
}else {
    echo 'Not connected';
    displayError("Database not connect"); 
}

?>