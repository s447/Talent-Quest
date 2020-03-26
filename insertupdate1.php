<?php
require('dbconnect.php');
$regno=$_POST["regno"];
$event=$_POST["event"];
$desc=$_POST["desc"];
$roomno=$_POST["roomno"];
$time=$_POST["time"];
$day=$_POST["day"];


$query = "insert into slotform values('$regno',$event','$desc','$roomno','$time','$day')";
$result = mysqli_query($con,$query);
header('Location:adminhome.php');
?>

