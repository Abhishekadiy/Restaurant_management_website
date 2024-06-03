<?php
 $name = $_POST['name'];
 $email =$_POST['email'];
 $contact = $_POST['contact'];
 $feedback = $_POST['feedback'];

    
 $host = "localhost";
 $dbusername ="root";
 $dbpassword ="";
 $dbname = "project";

 $conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);

        if (mysqli_connect_error()){
            die('connect error'. mysqli_connect_errno().')'.mysqli_connect_error());
        }
        else{
            $sql = "INSERT INTO feedback (name,email,contact,feedback) VALUES('$name','$email','$contact','$feedback')";
            if($conn->query($sql)){
                header('Location: feedconferm.html');
            }
            else {
                echo "error".$sql."<br>".$conn->error();
            }
            $conn->close();
        }

        