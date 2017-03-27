
<?php
session_start();
include "db.php";

?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="new_signup.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Sofia' rel='stylesheet' type='text/css'>
<head>
  <title>signup</title>
</head>
<body>
<form method="post" action="validate.php">


<div class='login'>
  <h2>SINGNUP</h2>
  <input type="text" name="name" id="name" placeholder='Name' required />
  <input name='username' placeholder='Username' type='text'>
  <input id='password1' name='password1' placeholder='Password' type='password' required maxlength="20" minlength="8">
  <input id='password2' name='password2' placeholder='re-enter Password' type='password' required maxlength="20" minlength="8">
  <input type="text" name="dob" id="dob" placeholder='date of birth'/>
  <input type="text" name="pno" id="pno" placeholder='phone number' maxlength="12" />
  <input class='animated' type='submit' value='Register'>
  
</div>

</form>

</body>
</html>
