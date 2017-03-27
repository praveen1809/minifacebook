<?php
include "db.php";
include "home.php";

$username=$_SESSION['username'];
$name=$_SESSION['name'];
$sql="(select friends.funame as uname,status.msg from friends,status where friends.funame=status.uname and friends.uname='$username') union (select friends.uname as uname,status.msg from friends,status where friends.uname=status.uname and friends.funame='$username') union (select uname,msg from status where uname='$username') ;";
$res=mysqli_query($db,$sql);
$num=mysqli_num_rows($res);
echo "<div id='mem'>";
if($num>0){
	while($row=mysqli_fetch_assoc($res)){
		
		$namee=$row['uname'];
		$sql1="select name from user where uname='$namee';";
		$res1=mysqli_query($db,$sql1);
		$num1=mysqli_num_rows($res1);
		
		$row1=mysqli_fetch_assoc($res1);//){
			echo "<b>" . $row1['name'] . "</b><br/>";
		
		echo $row['msg'] . "</br></br>";
	

	}
}


//$sql1="select img from images where uname='$username';";

$sql="(select friends.funame as uname,images.img from friends,images where friends.funame=images.uname and friends.uname='$username')
		union
		(select friends.uname as uname,images.img from friends,images where friends.uname=images.uname and friends.funame='$username')
		union
		(select uname,img from images where uname='$username');";
$res=mysqli_query($db,$sql);
$num=mysqli_num_rows($res);
echo "<div id='feeed'>";
if($num>0){
	while($row=mysqli_fetch_assoc($res)){
		$nam=$row['uname'];
		$sql1="select name from user where uname='$nam';";
		$res1=mysqli_query($db,$sql1);
		$num1=mysqli_num_rows($res1);
		$row1=mysqli_fetch_assoc($res1);
			echo "<b>" . $row1['name'] . "</b><br/>";
		
		echo "<img height='300px' width='300px' src='data:image/jpeg;base64," . base64_encode($row['img']) ."'>";
	
		echo "</br>";

	}
}
echo "</div>";
echo "</div>";
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="message.css">

<head>
  <title></title>
</head>
<body>

</body>
</html>
