<?php
session_start();
unset($_SESSION["login_user"]);
header("Location:home.html");
?>


<html>
<head>
    <title>signout page</title>
    <style>
        * {
  box-sizing: border-box;
}
body{
	margin: 0;
	padding: 0;
	background: url(signout.webp);
	background-size:cover;
	background-position: center;
	font-family: sans-serif;
}
        .signout{
        background-color:transparent;
    width: 500px;
    margin: 250px 0px 0px 430px;
    align-content: center;
    align-self: center;
    text-align: center;
}

        .signout input[type="submit"]{
    border: 40px;
    outline: 20px;
    height: 30px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
    
}
.signout input[type="submit"]:hover{
    cursor: pointer;
    background: #ffc107;
    color: #000;
    text-align: center;
    
}
    </style>
    <body>
        <form action="home.html">
        <div class="signout">
        <h1>Your slot has been booked successfully.</h1>
            <input type="submit" value="sign out" id="sub"><br>
        </div>
            </form>
    </body>
    </head>
</html>