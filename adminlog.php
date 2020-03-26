<html>
<head>
<title>loginform</title>
    <link rel="stylesheet"  type= "text/css" href="adminstyle.css">
    <script>  
function validateform(){  
var name=document.myform.name.value;  
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
    <style>
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
}</style>
<body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<input type="button" value="Go back!" class="btn" onclick="history.back()">
<a href="adminhome.php"><button class="btn"><i class="fa fa-home"></i> Home</button></a> 
	<div class="loginbox">
	<img src="admin.jpg" class=download>
        <h1>Hello admin!!</h1>
        <form name="myform" method="post" onsubmit="return validateform()"  action="LoginCheck.php">  
            <p>username</p>
            <input type="text" name="name" placeholder="Enter username">
            <p>password</p>
            <input type="password" name="password" placeholder="Enter password">
            <input type="submit" value="log in">
            
        </form>
        
        
	</div>
</body>
</head>
</html>





