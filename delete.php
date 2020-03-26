<?php

$db=new mysqli("localhost","root","","talent_quest")or die ("database connection failed");
$rid=$_REQUEST['id'];
$sql = "delete from slotform WHERE rid=$rid"; 
$q=$db->query($sql);
header('Location:requests.php');
?>