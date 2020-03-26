<?php
$db=new mysqli("localhost","root","","talent_quest")or die ("database connection failed");
$sql="select s.Register_number,si.name,s.Category,s.roomno,s.Time,s.Day,s.Date from slotform s,signup si where s.Register_number=si.Register_number and roomno is not null";
$q=$db->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<style>
    body{
	margin: 0;
	padding: 0;
	background: url("bg3.jpg");
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
  background-color:peachpuff;
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
<h1 align="center">Circular</h1>
<p>This is to inform that the following events are to be organised in the following week.So we request you to avail the required rooms at following timings on following days.</p>

<table style="width:100%">
  <tr>
    <th>Registered Number</th>
    <th>Name</th>
    <th>Event Name</th>
    <th> Room Number</th>
    <th> Time</th>
      <th>Date</th>
      <th>Day</th>
  </tr>
  
    <?php
            while($row=$q->fetch_assoc()){
        ?>
        <tr>
            <td><?= $row['Register_number']?></td>
            <td><?= $row['name']?></td>
            <td><?= $row['Category']?></td>
            <td><?= $row['roomno']?></td>
            <td><?= $row['Time']?></td>
            <td><?= $row['Date']?></td>
            <td><?= $row['Day']?></td>
        </tr>
        <?php
            }
        ?>
</table>
    <p>Thankyou<br>with regards-TalentQuest</p>
<br>
</html>