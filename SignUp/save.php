<?php

$server ="localhost";
$username="root";
$password="";
$dbname="webform";

$con= mysqli_connect($server, $username, $password, $dbname);
if(!$con){
    echo"not connected";
}
//start
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$number = $_POST['number'];

$sql="INSERT INTO `test`(`name`, `email`, `address`, `number`) VALUES ('$name','$email','$address','$number')";

$result = mysqli_query($con,$sql);
if($result)
{
    echo"data submitted";
}

    else{
        echo"error";
    }

?>