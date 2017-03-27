<?php 
include "db.php";
session_start();
$funame=$_GET['funame'];
//$fname = $_GET['fname'];
//echo $fname;
echo $funame;
$username=$_SESSION['username'];
$name=$_SESSION['name'];
echo $username;
echo $name;
$sql="(select funame from friends where funame='$funame' and uname='$username') union (select uname from friends where uname='$funame' and funame='$username') ;";
$result=mysqli_query($db,$sql);
$num_rows = mysqli_num_rows($result);
if($num_rows >=1 ){
	echo $funame ."is already a friend of yours.....start finding more friends!!!";
	header('Location:friend_request.php');
}
else{

$sql="INSERT into friends (uname,funame) values ('$username','$funame');";
if($res=mysqli_query($db,$sql)){
	echo "sucessfully added";
	//$uname=$row['uname'];
	$sql1="delete from requests where funame='$username' and uname='$funame';";
	if($result=mysqli_query($db,$sql1)){
	echo "sucessfully deleted";
//	}

	//header('Location: friend_request.php');

}
}
}
{

header('Location: friend_request.php');

}

?>
