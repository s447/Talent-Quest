<?php
$db=new mysqli("localhost","root","","talent_quest")or die ("database connection failed");
$roomno=$_POST["roomno"];
$rid=$_POST["rid"];
$sql = "UPDATE slotform SET roomno = $roomno WHERE rid=$rid"; 
$q=$db->query($sql);
header('Location:requests.php');
?>