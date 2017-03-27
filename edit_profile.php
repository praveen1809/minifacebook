<?php
//session_start();
include "db.php";
include "home.php";
$name=$_SESSION["name"];
$username=$_SESSION['username'];
$sql="select name,pass,dob,pno from user where uname='$username';";
$result=mysqli_query($db,$sql);
if(mysqli_num_rows($result)>0){
$row = mysqli_fetch_assoc($result);
$pass=$row['pass'];
$dob=$row['dob'];
$pno=$row['pno'];
}

if(!empty($_POST)){
	$sql="update user set pass='$_POST[password]',name='$_POST[name]',dob='$_POST[dob]',pno='$_POST[pno]' where uname='$username';";
		if (mysqli_query($db, $sql)) {
			$_SESSION['name']=$row['name'];
    		echo "Record updated successfully";
    		header('Location:edit_profile.php');
    		//return true;
		} 
		else {
    		echo "Error updating record: " . mysqli_error($db);
    		//return false;
		}

}

	

?>


<html>
<link rel="stylesheet" type="text/css" href="message.css">
<head>
	<title>edit profile</title>
</head>
<body>
	<div id="mem">
<h1>EDIT PROFILE</h1>
<form method="post" >
NAME:
<input name="name" type="text" value="<?php echo $name?>" required  ></br></br>

PASSWORD:
<input name="password" type="text" value="<?php echo $pass ?>" required maxlength="20" min="8"></br></br>

DATE OF BIRTH:
<input name="dob" type="date" value="<?php echo $dob ?>"></br></br>

PHONE NUMBER:
<input name="pno" type="text" value="<?php echo $pno ?>" > </br></br>

<input value="SAVE" type="submit">
</form>
</div>
</body>
</html>
