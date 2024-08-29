<?php
    include ("dbcon.php");
   

    if(isset($_POST['name'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $query = $_POST['query'];
        $qry ="INSERT INTO contact ( `name`, `email`, `query`) 
        VALUES ( '$name', '$email', '$query ')";
    
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