<?php 
include "db.php";
session_start();
$funame=$_GET['funame'];

//$fname = $_GET['fname'];
//echo $fname;
echo $funame;
$username=$_SESSION['username'];

/*$sql="(select funame from friends where funame='$funame' and uname='$username') union (select uname from friends where uname='$funame' and funame='$username');";
$result=mysqli_query($db,$sql);
$num_rows = mysqli_num_rows($result);
if($num_rows >=1 ){
*/	
$sql="delete from  friends where funame = '$funame' and uname ='$username' ;";
//echo "hai";
$res=mysqli_query($db,$sql);
$num=mysqli_num_rows($res);
if($num>o){
	echo "sucessfully removed";
	header('Location: friends.php');
}
else{
	$sql="delete from  friends where uname = '$funame' and funame ='$username' ;";
//echo "sorry";
$res=mysqli_query($db,$sql);
$num=mysqli_num_rows($res);
if($num>o){
	echo "sucessfully removed";
header('location: friends.php');
}
}
header('location: friends.php');

?>
