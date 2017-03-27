<?php 
include "db.php";
session_start();
$funame=$_GET['funame'];
$uname=$_GET['uname'];
//$name = $_GET['name'];
//echo $name;
echo $uname;
echo $funame;
$username=$_SESSION['username'];

$sql="select funame from requests where uname='$uname' and funame='$funame' ;";
$result=mysqli_query($db,$sql);
$num_rows = mysqli_num_rows($result);
if($num_rows >=1 ){
	echo $fname ."request already sent!!!";
	header('Location:members.php');
}
else{
$sql="insert into requests (uname,funame) values ('$uname','$funame');";
if($res=mysqli_query($db,$sql)){
	echo "sucessfully added";
	header('Location: members.php');
}
else{
header('Location: members.php');
}
}
?>
