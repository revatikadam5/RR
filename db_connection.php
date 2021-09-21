<?php
$conn = mysqli_connect("localhost","root","","Rangsharda");
if(mysqli_connect_error())
{
    echo mysqli_connect_errno();
    die();
}
else if(isset($_POST['btn-available']))
{
    $checkin = $_POST['check-in'];
    $checkout = $_POST['check-out'];
    echo"ok";
}

?>