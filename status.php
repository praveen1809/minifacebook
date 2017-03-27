<?php
include "db.php";
include "home.php";

$username=$_SESSION['username'];
if(!empty($_POST)){
$msg=$_POST['msg'];
$sql="insert into status (uname,msg) values ('$username','$msg');";
if($res=mysqli_query($db,$sql)){
	echo "STATUS POSTED";
	header('Location:status.php');
}
else{
	echo "UNSUCCESSFUL";
}
}

?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="message.css">

<head>
	<title>message</title>
</head>
<body><br/>
	<div id="mem">
<form method="post" >
STATUS:<br/>
<textarea name="msg" id="msg" required> </textarea>
<input value="POST" type="submit">

</div>
</body>
</html>





<?php
?>