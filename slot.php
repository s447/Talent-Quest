<?php
session_start();
$db=new mysqli("localhost","root","","talent_quest")or die ("database connection failed");
$sql1="select count(*) as cou from slotform where day='Monday'and time='3:20'";
$q1=$db->query($sql1);
$result1 =$q1->fetch_assoc(); 
$sql2="select count(*) as cou from slotform where day='Tuesday'and time='3:20'";
$q2=$db->query($sql2);
$result2 =$q2->fetch_assoc(); 
$sql3="select count(*) as cou from slotform where day='Wednesday'and time='3:20'";
$q3=$db->query($sql3);
$result3 =$q3->fetch_assoc(); 
$sql4="select count(*) as cou from slotform where day='Thursday'and time='3:20'";
$q4=$db->query($sql4);
$result4 =$q4->fetch_assoc(); 
$sql5="select count(*) as cou from slotform where day='Friday'and time='3:20'";
$q5=$db->query($sql5);
$result5 =$q5->fetch_assoc(); 
$sql6="select count(*) as cou from slotform where day='Saturday'and time='1:00'";
$q6=$db->query($sql6);
$result6 =$q6->fetch_assoc(); 
$sql7="select count(*) as cou from slotform where day='Saturday'and time='1:40'";
$q7=$db->query($sql7);
$result7 =$q7->fetch_assoc(); 
$sql8="select count(*) as cou from slotform where day='Saturday'and time='2:30'";
$q8=$db->query($sql8);
$result8 =$q8->fetch_assoc(); 
?>
<html>
 <head> 
  <title>slot page</title> 
  <style>
body{
  margin: 0;
  padding: 0;
  background: url('pcc.jpg');
  background-size:cover;
  background-position: center;
  font-family: sans-serif;
}
a{
  text-decoration:overline,underline;
  color: black;
}
      table{
          text-align: center;
      }
      .btn{
    border: 40px;
    outline: 20px;
    height: 30px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
      }
.btn:hover{
    cursor: pointer;
    background: #ffc107;
    color: #000;
    text-align: center;
}
p{
    font-size: 30px;
}
</style> 
 </head> 
 <body> 
  <br> 
  <br> 
  <br> 
  <br> 
  <br> 
  <br> 
<center>
    <?php 
		$userid=$_SESSION['login_user'];
				$sql="select name from signup where Register_number='$userid'";
$q=$db->query($sql);
$result =$q->fetch_assoc(); 
    echo $result['name'];
    ?>
  <h2 align="center">Please view the available slots before you book your own!!</h2> 
  <table border="1" align="center" width="60%" height="60%"> 
      <tr>
          <td><strong>Day</strong></td>
          <td><strong>Time</strong></td>
          <td><strong>Number of available slots</strong></td>
          <td><strong>Proceed further!!</strong></td>
      </tr>
      <tr>
          <td>Monday</td>
          <td>3:20 PM</td>
          <td><?php echo 3-$result1["cou"];?></td>
          <td><a href="check.php?id=<?php echo 3-$result1["cou"]; ?>"><button class="btn">BOOK A SLOT</button></a></td>

      </tr>
      <tr>
          <td>Tuesday</td>
          <td>3:20 PM</td>
          <td><?php echo 3-$result2["cou"];?></td>
           <td><a href="check.php?id=<?php echo 3-$result2["cou"];?>"><button class="btn">BOOK A SLOT</button></a></td>
      </tr>
      <tr>
          <td>Wednesday</td>
          <td>3:20 PM</td>
          <td><?php echo 3-$result3['cou'];?></td>
           <td><a href="check.php?id=<?php echo 3-$result3["cou"]; ?>"><button class="btn">BOOK A SLOT</button></a></td>
      </tr>
      <tr>
          <td>Thursday</td>
          <td>3:20 PM</td>
          <td><?php echo 3-$result4['cou'];?></td>
           <td><a href="check.php?id=<?php echo 3-$result4["cou"]; ?>"><button class="btn">BOOK A SLOT</button></a></td>
      </tr>
      <tr>
          <td>Friday</td>
          <td>3:20 PM</td>
          <td><?php echo 3-$result5['cou'];?></td>
           <td><a href="check.php?id=<?php echo 3-$result5["cou"]; ?>"><button class="btn">BOOK A SLOT</button></a></td>
      </tr>
      <tr>
          <td>Saturday</td>
          <td>1:00 PM</td>
          <td><?php echo 3-$result6['cou'];?></td>
           <td><a href="check.php?id=<?php echo 3-$result6["cou"]; ?>"><button class="btn">BOOK A SLOT</button></a></td>
      </tr>
      <tr>
          <td>Saturday</td>
          <td>1:40 PM</td>
          <td><?php echo 3-$result7['cou'];?></td>
           <td><a href="check.php?id=<?php echo 3-$result7["cou"]; ?>"><button class="btn">BOOK A SLOT</button></a></td>
      </tr>
      <tr>
          <td>Saturday</td>
          <td>2:30 PM</td>
          <td><?php echo 3-$result8['cou'];?></td>
           <td><a href="check.php?id=<?php echo 3-$result8["cou"]; ?>"><button class="btn">BOOK A SLOT</button></a></td>
      </tr>
    </table>
    <p>NOTE:Rooms will be allocated only if number of available slots will be not equal to zero</p>
    <a href="home.html"><button class="btn">Sign out!!</button></a>
     </center>
 </body>
</html>