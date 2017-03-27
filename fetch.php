<?php
include "db.php";
//include "home.php";
session_start();
$username=$_SESSION['username'];
$funame=$_SESSION['funame'];
//echo $funame;
$sql="(select msgs.id,name,msgs.uname,msgs.msg from user,msgs where msgs.funame='$username' and msgs.uname='$funame' and user.uname='$funame')
		union
		(select msgs.id,name,msgs.funame,msgs.msg from user,msgs where msgs.uname='$username' and msgs.funame='$funame' and user.uname='$username' ) order by id desc ;";		//union        
        // (select name,messages.suname,messages.msg from user,messages where messages.runame='$funame' and messages.suname='$username' and user.uname=runame;); ";
$res=mysqli_query($db,$sql);
$num=mysqli_num_rows($res);
if($num>0){
	while($row=mysqli_fetch_assoc($res)){
		echo "<b>" . $row['name'] . ":</b></br>";
		echo $row['msg'] . "</br>";
		//$funame=$row['suname'];
		//$fname=$row['name'];
		//echo "<a href='message.php?funame=$funame&fname=$fname'>REPLY</a></br>";

	}
}
?>
