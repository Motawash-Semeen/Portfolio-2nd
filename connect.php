<?php
     $userName = $_POST['userName'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $message = $_POST['message'];

     //database connection
     $conn = new mysqli('localhost', 'root','','test');
     if($conn->connect_error)
     {
         die('Connection Failed :'.$conn->connect_error);
     }
     else
     {
         $stmt = $conn->prepare("insert into registration(userName, email, phone, message) values(?,?,?,?)");
         $stmt->bind_param("ssss", $userName, $email, $phone, $message);
         $stmt->execute();
         echo "registration Successfully...";
         $stmt->close();
         $conn->close();
    }
?>