<?php
session_start();

include "db.php";

$username = $_POST['username'];
$password = $_POST['password'];
$sql = "select uname,pass,name from user where uname='$username' and pass='$password';";
$result = mysqli_query($db,$sql);
echo $username;
echo $password;
if($result == false){
	echo "INCORRECT USERNAME OR PASSWORD";
	header('Location:login.php');
}

$num_rows = mysqli_num_rows($result);
  while($row = mysqli_fetch_assoc($result)) {
      $name=$row['name'];
  }
if($num_rows == 1){
	$_SESSION['login'] = 'OK';
	$_SESSION['username'] = $username;
	$_SESSION['name'] = $name;
	header('Location:profile.php');
	mysqli_close('$db');
	die();
}

mysqli_close($db);
echo "INVALID LOGIN";
header('Location:new_login.php');

?>
