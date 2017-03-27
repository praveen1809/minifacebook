<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="friends.css">

<head>
  <title></title>
</head>
<body>


<?php

include "db.php";
include "home.php";
$username=$_SESSION['username'];


$sql="(select funame as uname from friends where  uname='$username') union (select uname as uname from friends where  funame='$username');";
$result=mysqli_query($db,$sql);
$num_rows = mysqli_num_rows($result);

echo "<div id='frnd'>";

if($num_rows >=1 ){
	while($row=mysqli_fetch_assoc($result)){
	//echo "<div id='anu'>";// . "<h2>" . $row['fname'] . "</h2>";
   				 echo "<h3><b>" . $row['uname'] . "</b></h3>";
	        		 $funame= $row['uname'];
   				//$fname = $row['fname'];
         
   				echo "<a href='message.php?funame=$funame' > <p><span class='high'>MESSAGE  FRIEND</span></p></br></a>";
    			echo "<a href='remove_friend.php?funame=$funame' > <p><span class='high'>REMOVE FRIEND</span></p></a>"; 

   				}
}
/*$sql="select name,uname from friends where  funame='$username' ;";
$result=mysqli_query($db,$sql);
$num_rows1 = mysqli_num_rows($result);

 if($num_rows1 >=1 ){
  while($row=mysqli_fetch_assoc($result)){
  echo "<div>" . "<h2>" . $row['name'] . "</h2>";
           echo $row['uname'] . "</div>";

           $funame= $row['uname'];
          $fname = $row['name'];
          echo "<a href='message.php?funame=$funame' > MESSAGE  FRIEND</a></br></br>";
          echo "<a href='remove_friend.php?funame=$funame' > REMOVE FRIEND</a>"; 

          }
*/

if ($num_rows==0) {
  # code...

	echo "</br></br> <b>No friends to display....!!!!</b>";
}
echo "</div>";
   ?>


</body>
</html>
