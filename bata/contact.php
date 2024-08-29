<?php
// $firstname=$_POST['firstname'];
// $lastname=$_POST['lastname'];
// $email=$_POST['email'];
// $phone=$_POST['phone'];



// $conn=mysqli_connect("localhost","root","","bata") or die("<h1 style='color:red;'>sql not connect</h1>");
// $sql="insert into contact_detail(firstname , lastname , email , phone) values('{$firstname}','{$lastname}','{$email}','{$phone}')";

// $result=mysqli_query($conn,$sql) or die("<h1 style='color:red;'>query unsuccsess</h1>");

// header("Location:http://localhost/bata/index.php");
// mysqli_close($conn);



include ("dbconn.php");

   

    if(isset($_POST['firstname'])){
       

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $m_message = $_POST['m_message'];

       

        $qry ="INSERT INTO contact ( firstname, lastname, email,phone,m_message) 
        VALUES ( '$firstname', '$lastname', '$email ','$phone',' $m_message')";
        
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
