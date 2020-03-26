<?php
session_start();
?>
<html>
<head>
<title>signupform</title>
    <link rel="stylesheet"  type= "text/css" href="signupstyle.css">
    <script>
         function validate(){
    var uid = document.myform.regno.value;
    var uname = document.getElementById("name");
  var letters = /^[A-Za-z]+$/;
    var numbers = /^[0-9]+$/;
    var phone = document.getElementById("phone");
    var mail = document.getElementById("mail");
    var mailformat = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/;
    var pswd = document.getElementById("pswd");
    var cpswd = document.getElementById("cpswd");
    var alphanum = /^[0-9a-zA-Z]+$/;
  if (uid==null || uid==""){  
  alert("register number can't be blank");  
  return false;  
}else if(uid.length<12 || uid.length>12){  
  alert("register number must be 12 characters long.");  
  return false;  
}else if(uname.value==null || uname.value==""){
    alert("name can't be blank");
    return false;
}else if(!uname.value.match(letters)){
    alert("name should contain only alphabets");
    return false;
}else if(phone.value.length<10 || phone.value.length>10){
    alert("phone must have 10 characters only"); 
    return false;
}else if(!phone.value.match(numbers)){
    alert("phone must contain numericals only");
    return false;
}else if(!mail.value.match(mailformat)){
    alert("enter a valid mail id");
    return false;
}else if(pswd.value.length<6){
    alert("password should be at least 6 characters long");
    return false;
}else if(!pswd.value.match(alphanum)){
    alert("password should contain alphanumeric characters only");
    return false;
}else if(cpswd.value != pswd.value){
    alert("please check the re-entered password with the original one" );
    return false;
}
         }
         
    
    </script>
   
<body>
     
    
    <div class="signup">
        <h1>Sign up</h1>
        <img src="Signup.jpg" class=download>
        <form name="myform"  method="post" onsubmit="return validate();">  
        <label>Register number:</label>
        <input type="number" name="regno" id="regno" placeholder="Enter your register number" required><br>
        <label>Name:</label>
        <input type="text" name="name" id="name" placeholder="Enter your name" required><br>
        <label>Gender:</label>
        <input type="radio" name="gender" id="gender" value="male"checked><span id="male">&nbsp; Male</span>&nbsp;&nbsp;
        <input type="radio" name="gender" id="gender" value="female"><span id="male">&nbsp; Female</span>&nbsp;&nbsp;
        <input type="radio" name="gender" id="gender" value="others"><span id="male">&nbsp; Others</span>&nbsp;&nbsp;<br><br>
        <label>Year:</label>
        <select name="year" id="year" required>
        <option>1st</option>
        <option>2nd</option>
        <option>3rd</option>
        <option>4th</option></select><br>
        <label>Section:</label>
        <input type="radio" name="section" id="section" value="A" checked><span id="A">&nbsp; A</span>&nbsp;&nbsp;
        <input type="radio" name="section" id="section" value="B"><span id="B">&nbsp; B</span>&nbsp;&nbsp;
        <input type="radio" name="section" id="section" value="C"><span id="C">&nbsp; C</span>&nbsp;&nbsp;<br><br>
        <label>Phone no:</label>
        <select id="ph" name="phone" required>
           <option>+91</option>
            <option>+92</option>
            <option>+93</option>
            <option>+94</option>
            <option>+95</option>
        </select>
        <input type="phone" name="phone" id="phone" placeholder="Enter your mobile number" required><br><br>
        <label>Email id:</label>
        <input type="email" name="email" id="mail" placeholder="Enter your email" required><br><br>
        <label>Create password:</label>
        <input type="text" name="pswd" id="pswd" placeholder="Enter your password" required><br><br>
        <label>Confirm password:</label>
        <input type="text" name="cpswd" id="cpswd" placeholder="Re-enter your password" required><br><br>
        <input type="submit" value="sign up" id="sub" name="sub" ><br>
        <a href="login1.php">Already have an account?login</a>
        </form>
    </div>
</body>
</head>
</html>
<?php
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'talent_quest');
// REGISTER USER
if (isset($_POST['sub'])) {
  // receive all input values from the form
  $Register_number = mysqli_real_escape_string($db, $_POST['regno']);
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $year= mysqli_real_escape_string($db, $_POST['year']);  
  $Section = mysqli_real_escape_string($db, $_POST['section']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['pswd']);
  $password_2 = mysqli_real_escape_string($db, $_POST['cpswd']);
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM signup WHERE name='$name'  LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if ($user['name'] === $name) {
      echo  "<script >alert('username already exist') </script>" ;
  }
    else
	{
  	$password = md5($password_1);//encrypt the password before saving in the database
    $query = "INSERT INTO signup (Register_number,name,Gender,year,Section,Phone_no,emailid,password) 
  			  VALUES('$Register_number','$name','$gender','$year','$Section','$phone','$email','$password') ";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $name;
  	$_SESSION['success'] = "You are now logged in";
    }
}
?>