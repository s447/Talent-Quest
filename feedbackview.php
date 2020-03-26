<?php
$db=new mysqli("localhost","root","","talent_quest")or die ("database connection failed");
$sql="select * from feedback";
$q=$db->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<style>
    body{
	margin: 0;
	padding: 0;
	
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
<input type="button" value="Go back!" class="btn" onclick="history.back()">
<a href="adminhome.php"><button class="btn"><i class="fa fa-home"></i> Home</button></a> 
<h1 align="center">Feedback</h1>
<p>The following are the feedback given by different students who attended different events.</p>
<table style="width:100%">
  <tr>
    <th>Name</th>
      <th>Registered Number</th>
      <th>Year</th>
      <th>Section</th>
    <th>Event Name</th>
       <th>Date of attending</th>
       <th>Time Slot</th>
    <th>Name of tutor </th>
       <th>Feedback</th>
  </tr>
  <?php
            while($row=$q->fetch_assoc()){
        ?>
        <tr>
            <td><?= $row['Name']?></td>
            <td><?= $row['Register_number']?></td>
            <td><?= $row['Year']?></td>
            <td><?= $row['Sectiion']?></td>
            <td><?= $row['Events']?></td>
            <td><?= $row['Date']?></td>
            <td><?= $row['Time']?></td>
            <td><?= $row['Eventsfaculty']?></td>
            <td><?= $row['Feedback']?></td>
        </tr>
        <?php
            }
        ?>
</table>
    </body>
</html>