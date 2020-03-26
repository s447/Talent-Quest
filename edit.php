<?php
$db=new mysqli("localhost","root","","talent_quest")or die ("database connection failed");

$rid=$_REQUEST['id'];
$sql = "SELECT * from slotform where rid=$rid"; 
$q=$db->query($sql);
$row =$q->fetch_assoc(); 
?>
<html>
    <head>
<title>edit</title>
<style>
    table{
        width="60%";
        height="60%";
    }
     .edit{
        background-color:transparent;
    width: 500px;
    margin: 250px 0px 0px 700px;
    align-content: center;
    align-self: center;
    text-align: center;
}

     input[type="submit"]{
    border: 40px;
    outline: 20px;
    height: 30px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
    
}
input[type="submit"]:hover{
    cursor: pointer;
    background: #ffc107;
    color: #000;
    text-align: center;
    
}
        </style>
<body>
    
    <div class="edit">
<h2>Allocate a room for the request placed!!</h2>
<form name="form" method="post" action="editfile.php"> 
<table border=1 align="center" width="20%" height="20%">
<input type="hidden" name="new" value="1" />
    <tr><td>Request id:</td><td><input name="rid" type="text" value="<?php echo $row['rid'];?>" /></td><br></tr>
<tr><td>Room number:</td><td><input type="text" name="roomno" placeholder="Enter room" 
required value="<?php echo $row['roomno'];?>" /></td><br></tr>
</table>
<p><input name="submit" type="submit" value="Update" align="center"/></p>
</form>
        
	</div>
</body>
</head>
</html>