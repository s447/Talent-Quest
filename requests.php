<?php
session_start();
$db=new mysqli("localhost","root","","talent_quest")or die ("database connection failed");
$sql="select * from slotform";
$q=$db->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<style>
    body{
	margin: 0;
	padding: 0;
	background: url(bg2.jpg);
	background-size:cover;
	background-position: center;
	font-family: sans-serif;
}
    h1{
        color: brown;
        position: center;
        font-size: 80px;
    }
    p{
        font-family: sans-serif;
        font-size: 30px;
    }
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: center;
    font-size: 25px;
}
table{
  width: 100%;    
  background-color:cadetblue;
}
     .btn {
  background-color: DodgerBlue; /* Blue background */
  border: none; /* Remove borders */
  color: white; /* White text */
  padding: 12px 16px; /* Some padding */
  font-size: 16px; /* Set a font size */
  cursor: pointer; /* Mouse pointer on hover */
}
/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
</style>
</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<a href="adminhome.php"><button class="btn"><i class="fa fa-home"></i> Home</button></a> 
<h1 align="center">Slot Requests</h1>
<p>The following are the slot booking requests of students.</p>
<table style="width:100%">
  <tr>
    <th>Registered Number</th>
    <th>Event Name</th>
       <th>Pre-Requisites</th>
       <th>Tools Required</th>
    <th> Room </th>
       <th>Description</th>
    <th> Time</th>
      <th>Date</th>
      <th>Day</th>
      <th>roomno</th>
      <th>Edit</th>
      <th>Delete</th>
  </tr>
  <?php
    while($row=$q->fetch_assoc()){
        $_SESSION['id']=$row['rid'];
    ?>
        <tr>
            <td><?= $row['Register_number']?></td>
            <td><?= $row['Category']?></td>
            <td><?= $row['Preknowledge']?></td>
            <td><?= $row['Tools']?></td>
            <td><?= $row['room']?></td>
            <td><?= $row['Description']?></td>
            <td><?= $row['Time']?></td>
            <td><?= $row['Date']?></td>
            <td><?= $row['Day']?></td>
            <td><?= $row['roomno']?></td>
            <td><a href="edit.php?id=<?php echo $row["rid"]; ?>">Edit</a></td>
            <td><a href="delete.php?id=<?php echo $row["rid"]; ?>">Delete</a></td>
        </tr>
        <?php
            }
        ?>
</table>
</body>
</html>