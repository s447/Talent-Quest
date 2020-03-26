<?php
$db=new mysqli("localhost","root","","talent_quest")or die ("database connection failed");

$rid=$_REQUEST['id'];
if($rid==0)
    echo "0 slots available try another slot";
else
    header('Location:slotform.php');
?>