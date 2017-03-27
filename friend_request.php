<?php 
//session_start();
include "db.php";
include "home.php";
$username=$_SESSION['username'];

?>




<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="message.css">
<head>
	<title></title>
</head>
<body>
<?php
echo "<div id='mem'>";
$sql="select uname from requests  where funame= '$username' ;";

$result=mysqli_query($db,$sql);
if(mysqli_num_rows($result)==0){
	echo "NO FRIEND REQUESTS!!!";

}
else{
while($row=mysqli_fetch_assoc($result)){
	//echo "<div>";// . "<h2>" . $row['name'] . "</h2>";
   				 echo "<h3>" . $row['uname'] . "</h3>";
   				$funame= $row['uname'];
   				//$fname = $row['name'];
    			        echo "<a href='add_friend.php?funame=$funame'> <span class='high'>CONFIRM FRIEND</span></a><br/>"; 
  
  }  	
}
echo "</div>";
?>
</body>
</html>
