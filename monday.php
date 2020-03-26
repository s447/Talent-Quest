<?php
$db=new mysqli("localhost","root","","talent_quest")or die ("database connection failed");
$sql="select s.Register_number,si.name,s.Category,s.Description,s.roomno,s.Time,s.Day from slotform s,signup si where s.day='monday'and s.roomno is not null and s.Register_number=si.Register_number";
$q=$db->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
    h2{
        align-content: center;
        color: brown
    }
th, td {
  padding: 15px;
  text-align: center;
}
table{
  width: 100%;    
  background-color:skyblue;
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
<a href="home.html"><button class="btn"><i class="fa fa-home"></i> Home</button></a> 
<h2 align="center" style="font-size:40px">Events on monday!!</h2>
<table border=2 style="width:100%""font-size:40px">
  <tr>
    <th>Registered Number</th>
    <th>Name</th>
    <th>Event Category</th>
    <th>Description</th>
    <th> Room Number</th>
    <th> Time</th>
      <th>Day</th>
  </tr>
  <?php
            while($row=$q->fetch_assoc()){
        ?>
        <tr>
            <td><?= $row['Register_number']?></td>
            <td><?= $row['name']?></td>
            <td><?= $row['Category']?></td>
            <td><?= $row['Description']?></td>
            <td><?= $row['roomno']?></td>
            <td><?= $row['Time']?></td>
            <td><?= $row['Day']?></td>
        </tr>
        <?php
            }
        ?>
</table>
    </body>
</html>