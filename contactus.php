<?php
 $name = $_POST['name'];
 $email =$_POST['email'];
 $contact = $_POST['contact'];
 $address = $_POST['address'];
 $message = $_POST['message'];

    
 $host = "localhost";
 $dbusername ="root";
 $dbpassword ="";
 $dbname = "project";

 $conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);

        if (mysqli_connect_error()){
            die('connect error'. mysqli_connect_errno().')'.mysqli_connect_error());
        }
        else{
            $sql = "INSERT INTO message (name,email,contact,address,message) VALUES('$name','$email','$contact','$address','&message')";
            if($conn->query($sql)){
                header('Location: con_conferm.html');
            }
            else {
                echo "error".$sql."<br>".$conn->error();
            }
            $conn->close();
        }

        