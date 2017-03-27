<?php 
include "db.php";
include "home.php";
$username=$_SESSION['username'];
?>


<html>
<link rel="stylesheet" type="text/css" href="message.css">
<head>
	<title>members</title>
</head>
<body>
	
<?php
$sql="SELECT uname from user where uname!='$username' and uname not in (SELECT funame from requests where uname='$username' union select funame from friends where uname='$username' union select uname from requests where funame='$username' union select uname from friends where funame='$username');";
$sql1="select funame from requests where uname='$username' ;";
$sql2="select funame from friends where uname='$username';";
$sql3="select uname from friends where funame='$username';";
$result=mysqli_query($db,$sql);
$result1=mysqli_query($db,$sql1);
$result2=mysqli_query($db,$sql2);
$result3=mysqli_query($db,$sql3);



echo "<div id='mem'>";
while($row1=mysqli_fetch_assoc($result1)){
	
		     
   				echo "<h3>" . $row1['funame'] . "</h3>";
   				 
    			echo "<span class='high'>FRIEND REQUEST SENT</span></br>"; 
   				 	
		     		}
while($row2=mysqli_fetch_assoc($result2)) {
	
		     	//echo "<div>"; //. "<h2>" . $row2['fname'] . "</h2>";
   				echo "<h3>" . $row2['funame'] . "</h3>";//</div>";
   		
    			echo "<p><span class='high'><a href='friends.php'>FRIENDS</a></span></p></br>"; 
   				 	
		     		}
 while($row3=mysqli_fetch_assoc($result3)) {
	
		     	 //echo "<div>";// . "<h2>" . $row3['name'] . "</h2>";
   				 echo  "<h3>" . $row3['uname'] . "</h3>";//</div>";
   				
    			echo "<p><span class='high'><a href='friends.php'>FRIENDS</a></span></p></br>"; 
   				 	
		     		}

    
  

  while($row=mysqli_fetch_assoc($result)) {
  					$nam=$row['uname'];
					$sql4="select name from user where uname='$nam';";
					$res4=mysqli_query($db,$sql4);
					$row4=mysqli_fetch_assoc($res4);
								echo "<h3>" . $row4['name'] . "</h3>";
   				echo $row['uname'];// . "</div>";
   				$funame= $row['uname'];
   				$fname = $row4['name'];
   				$name=$_SESSION['name'];
    			echo "<a href='add_request.php?funame=$funame&uname=$username'> <p><span class='high'>ADD FRIEND</span></p></a><br/>"; 
							
						}
				
    	
//}
echo "</div>";
?>

</body>
</html>
