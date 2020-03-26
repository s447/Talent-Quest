<?php
session_start();
 $regno=$_SESSION['login_user'];
require('dbconnect.php');

$category=$_POST["talent"];
$dateoftheevent=$_POST["date"];
$dayoftheevent=$_POST["day"];
$timeoftheevent=$_POST["time"];
$preknowledge=$_POST["pre-knowledge"];
$tools=$_POST["tools"];
$room=$_POST["room"];
$description=$_POST["description"];

$query = "insert into slotform(Register_number,Category,Date,Day,Time,Preknowledge,Tools,room,Description) values('$regno','$category','$dateoftheevent','$dayoftheevent','$timeoftheevent','$preknowledge','$tools','$room','$description')";

$result = mysqli_query($con,$query);
header('Location:signout.html');

?>

