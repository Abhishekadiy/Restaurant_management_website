
<?php
 $username = $_POST['username'];
 $email =$_POST['email'];
 $contact = $_POST['contact'];
 $guest_no = $_POST['guest_no'];
 $date = $_POST['date'];
 $time = $_POST['time'];

        $host = "localhost";
        $dbusername ="root";
        $dbpassword ="";
        $dbname = "project";

        $conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);

        if (mysqli_connect_error()){
            die('connect error'. mysqli_connect_errno().')'.mysqli_connect_error());
        }
        else{
            $sql = "INSERT INTO book_table (username,email,contact,guest_no,date,time) VALUES('$username','$email','$contact','$guest_no','$date','$time')";
            if($conn->query($sql)){
                header('Location: table_conferm.html');
            }
            else {
                echo "error".$sql."<br>".$conn->error();
            }
            $conn->close();
        }
   
