<?php
session_start();
 $userid=$_SESSION['login_user'];
$db=new mysqli("localhost","root","","talent_quest")or die ("database connection failed");
$sql="select Register_number,name,Phone_no,emailid from signup where Register_number=$userid";
$q=$db->query($sql);
?>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}
body{
	margin: 0;
	padding: 0;
	background: url(slotform.webp);
	background-size:cover;
	background-position: center;
	font-family: sans-serif;
}
input[type=text], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=number]{
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
 margin-left:50%;
}
input[type=submit]:hover {
  background-color: #45a049;

}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
textarea {
  width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  resize: none;
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
<form name="myform" action="insertslotform.php" method="POST" onsubmit="return validate();">
<table border=0 align=center>
<br>
<br>
<br>
<br>
<br>
    <?php $row=$q->fetch_assoc()?>
    <tr><th>Register number:</th>
     <td><?= $row['Register_number']?></td>
    </tr> 
    <tr><th>Candidate's_Name:</th>
     <td><?= $row['name']?></td>
    </tr> 
    <tr><th>Phone number:</th>
     <td><?= $row['Phone_no']?></td>
    </tr> 
   <tr><th>Email id:</th>
     <td><?= $row['emailid']?></td>
    </tr> 
    <tr><td><b>Category</b>:</td><td><select name="talent" required>
    <option value="Singing">Singing</option>
    <option value="Dancing">Dancing</option>
    <option value="Instrument">Instrument</option>
    <option value="Coding">Coding</option>
 <option value="other activity">other activity</option>
  </select></td></tr>
<tr><td><b>Date of the event:</b></td><td><input type="date" name="date" required></td></tr>
<tr><td><b>Day of the event:</b></td><td><select name="day" required>
    <option value="monday">Monday</option>
    <option value="tuesday">Tuesday</option>
    <option value="wednesday">Wednesday</option>
    <option value="thursday">Thursday</option>
 <option value="friday">Friday</option>
   <option value="saturday">Saturday</option></select></td></tr>
<tr><td><b>Time of the event:</b></td><td><input type="time" name="time" required></td></tr>
<tr><td><b>Any pre-knowledge needed?</b></td><td><input type="radio" name="pre-knowledge" value="yes"> Yes
    <input type="radio" name="pre-knowledge" value="no" checked> No</td></tr>
<tr><td><b>Any tools or things required?</b></td><td><input type="radio" name="tools" value="yes">Yes
    <input type="radio" name="tools" value="no" checked>No</td></tr>
<tr><td><b>Preferable room:</b></td><td><input type="radio" name="room" value="Class room" checked> Class room
<input type="radio" name="room" value="Lab"> Lab
<input type="radio" name="room" value="Anything is fine"> Anything is fine</td></tr>
<tr><td><b>Description:</b></td><td><textarea name="description" required placeholder=" Describe your event"></textarea>
<p><b>Note:If any pre knowledge or tools required then select the checkbox and <br>give the details of the necessary things in the description</b></p></td></tr>
</table>
<input type="submit" name="submit" value="submit" >
</form>
</body>
</html>