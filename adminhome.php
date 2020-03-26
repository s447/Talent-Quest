
<html>
<head>
<title>admin home</title>
</head>
<style>
body{
  margin: 0;
  padding: 0;
  background: url('aaa.jpg');
  background-size: contain;
  background-position: center;
  font-family: sans-serif;
}
.button {
  background-color: purple;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
align:center;
}
</style>
<body>
<div style="text-align:right">
<h1 align=center>WELCOME ADMIN!!!</h1>
<br>
<br>
<br>
<a href="requests.php"><button class="button">View  requests!</button><br></a><br>
<a href="circular.php"><button class="button">Circulars</button><br></a><br>
<a href="feedbackview.php"><button class="button">View feedbacks</button><br><br></a>
<a href="update1.html"><button class="button">Update home</button><br></a><br>
<a href="home.html"><button class="button">LOGOUT</button><br></a>
</div>
<?php 
		session_start();
		$conn=mysqli_connect("localhost","root","","talent_quest");
		echo "WELCOME ".$_SESSION['login_user']."<br/>";
		$userid=$_SESSION['login_user'];
				$sql="select user from a_loginform where user='$userid'";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result);
		echo $row["user"];
?>
</body>
</html>