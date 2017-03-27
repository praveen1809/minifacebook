<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="message.css">

<head>
  <title>View profile</title>
</head>

<body>

</body>
</html>


<?php
include 'db.php';
include 'home.php';
$username=$_SESSION['username'];
$sql="select name,pass,dob,pno from user where uname='$username';";
$result=mysqli_query($db,$sql);
echo "<div id='mem'>";
if(mysqli_num_rows($result)>0){
$row = mysqli_fetch_assoc($result);

echo "<h1>VIEW PROFILE</h1>";
echo "<p><b>USERNAME:</b>" . $username . "<br/></p>";
echo "<p><b>NAME:</b>" . $row["name"] . "<br/></p>";

echo "<p><b>PASSWORD:</b>" . $row["pass"] . "<br/></p>";

echo "<p><b>DATE_OF_BIRTH:</b>" . $row["dob"] . "<br/></p>";

echo "<p><b>PHONE_NUMBER:</b>" . $row["pno"] . "<br/></p>";
}
echo "</div>";
?>





