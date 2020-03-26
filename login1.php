<html>
<head>
<title>loginform</title>
<style>
    body{
	margin: 0;
	padding: 0;
	background: url(pic1.jpg);
	background-size: cover;
	background-position: center;
	font-family: sans-serif;
}
.loginbox{
    width: 320px;
    height: 400px;
    background: #000;
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}
.download{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}
h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}
.loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.loginbox input{
    width: 100%;
    margin-bottom: 20px;
}
.loginbox input[type="text"],input[type="password"]{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.loginbox button{
    border: none;
    outline: none;
    height: 40px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.loginbox input[type="submit"]{
    border: 40px;
    outline: 20px;
    height: 30px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.loginbox input[type="submit"]:hover{
    cursor: pointer;
    background: #ffc107;
    color: #000;
    text-align: center;
}
.loginbox a{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color: darkgray;
}
.loginbox a:hover{
    cursor: pointer;
    color: #ffc107;
}
.loginbox button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: 2px;
  outline: 2px;
  text-align: center;
  cursor: pointer;
  transition: 0.3s;
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
    <script>  
function validateform(){  
var name=document.myform.username.value;  
var password=document.myform.password.value;  
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
}  
</script>  
<body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<input type="button" value="Go back!" class="btn" onclick="history.back()">
<a href="home.html"><button class="btn"><i class="fa fa-home"></i> Home</button></a>
	<div class="loginbox">
	<img src="download.png" class=download>
        <h1>login here</h1>
        <form name="myform"  method="post" onsubmit="return validateform()"  action="LoginChecks.php" >  
            <p>username</p>
            <input type="text" name="username" placeholder="Enter username">
            <p>password</p>
            <input type="password" name="password" placeholder="Enter password">
            <input type="submit" value="log in" ><br>
            <a href="reg.php">Don't have an account?signup</a>
        </form>
</div>
</body>
</head>
</html>