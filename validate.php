<?php

include 'db.php';


$name =$_POST['name'];
$username=$_POST['username'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];
$dob=$_POST['dob'];
$pno=$_POST['pno'];
echo $username;
echo $password1;
if($password1 != $password2){
	echo "PASSWORDS DONOT MATCH";
	echo '<a href="signup.php">TRY AGAIN </a>';
	exit;
}

if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
	echo $emailErr;
}
/*if(!(preg_match("/^[0-9]{10}$/", $pno))) {
  echo "invalid phone number";
}
*/
else{

$res="SELECT * FROM user WHERE uname = '$_POST[username]';";
$resu=mysqli_query($db,$res);
$num_rows= mysqli_num_rows($resu); 
if($num_rows >=1) { 
	echo "SORRY...YOU ARE ALREADY REGISTERED USER..."; 
} 


$sql="INSERT INTO user (name,uname,pass,dob,pno) VALUES('$name','$username','$password2','$dob','$pno');";
$result=mysqli_query($db,$sql);
if($result== false){
	echo "ERROR SIGNNING UP";
	echo '<a href="new_signup.php">TRY AGAIN </a>';
	exit;
}

else{
	echo "SUCCESSFULLY REGISTERED..!!";
	header('Location:new_login.php');
}
}
?>

