<?php
include("dbconn.php");
if(isset($_POST['email'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    $qry ="INSERT INTO signup ( email, pass) 
    VALUES ( '$email', ' $pass')";
    
    $mysqli =$conn->prepare($qry);
    $result = $mysqli->execute();

    if($result){
        echo "SingUp  successfully";
        header("location: index.php");
    } else {
        echo "no SingUp";
    }   
}


?>
