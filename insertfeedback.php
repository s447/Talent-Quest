<?php
require('dbconnect1.php');
$name=$_POST["name"];
$regno=$_POST["registernumber"];
$year=$_POST["year"];
$section=$_POST["section"];
$event=$_POST["talent"];
$date=$_POST["date"];
$timeslot=$_POST["time"];
$eventsfaculty=$_POST["faculty"];
$feedback=$_POST["feedback"];

$query = "insert into feedback(Name,Register_number,Year,Sectiion,Events,Date,Time,Eventsfaculty,Feedback) values('$name','$regno','$year','$section','$event','$date','$timeslot','$eventsfaculty','$feedback')";
$result = mysqli_query($con,$query);

header('Location:home.html');
?>

