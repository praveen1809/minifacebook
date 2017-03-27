<?php
include "db.php";
$msg=$_POST['msg'];
$username=$_POST["uname"];
$funame=$_POST["funame"];
$sql="insert into msgs (uname,funame,msg) values ('$username','$funame','$msg');";
if($res=mysqli_query($db,$sql)){
	echo "MESSAGE SENT SUCCESSFULLY";
}
else{
	echo "MESSAGE NOT SENT";
}

?>