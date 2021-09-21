<?php

$to = "revatikadam5@gmail.com";
$subject = "Test mail";
$message = "Hello, good morning";
$from = "revatikadam5@gmail.com";
$headers = "From : $from";

if(mail($to, $subject, $message))
{
    echo"Done";

}
else{
    echo"no";
}

?>