<?php
        $conn = mysqli_connect("localhost","root","","Rangsharda");
        if(mysqli_connect_error())
        {
            echo mysqli_connect_errno();
            die();
        }
        else if(isset($_POST['btn-submit']))
        {
            $name = $_POST['name'];
            $to = $_POST['email'];
            $text = $_POST['subject'];
            $msg = $_POST['message'];
            
            $query = "insert into contact_demo (name,email,subject,message) values ('$name','$to','$text','$msg') ";
            $result = mysqli_query($conn,$query);

            
        }
?> 