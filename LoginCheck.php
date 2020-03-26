<?php
session_start();

$host="localhost";

$username="root";

$password="";

$dbname="talent_quest";

$conn = new mysqli($host, $username, $password, $dbname);

if (isset($_POST['name'])) {

    $name = $_POST['name'];



}

if (isset($_POST['password'])) {

    $password= $_POST['password'];



}



{

$query = "SELECT * FROM a_loginform WHERE User='$name' AND password= '$password' ";

$result = mysqli_query($conn,$query);

if (mysqli_num_rows($result) == 1 ){

{
	

	$_SESSION['login_user']=$name;

header("location:adminhome.php");

 }

}

 else if(mysqli_num_rows($result) == 0){

 echo "user id or password is wrong";

 }

}

?>