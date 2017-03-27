<?php
include "db.php";
include "home.php";

$username=$_SESSION['username'];

$sql="select name,msgs.uname,msgs.msg from user,msgs where msgs.funame='$username' and user.uname=msgs.uname order by msgs.id desc,user.id ;"; //desc group by user.id;";
$res=mysqli_query($db,$sql);
$num=mysqli_num_rows($res);
if($num>0){
	echo "<div id='mem'>";
	while($row=mysqli_fetch_assoc($res)){
		echo "FROM: " . $row['name'] . "</br>";
		echo $row['msg'] . "</br>";
		$funame=$row['uname'];
		$fname=$row['name'];
		echo "<a href='message.php?funame=$funame'>REPLY</a></br></br>";

	}
	echo "</div>";
}
else
echo "Inbox empty...!!"
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
