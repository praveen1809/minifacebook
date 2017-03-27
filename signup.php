<?php
session_start();
include "db.php";

?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="signup.css">

<head>
	<title>signup</title>
</head>
<body>
<form method="post" action="validate.php">
NAME:
<p><input type="text" name="name" id="name" required /><br></p>

USERNAME:
<p><input type="text" name="username" id="name" required maxlength="30" /><br></p>

PASSWORD:
<p><input type="password" name="password1" id="password1" required maxlength="20" minlength="8" /><br></p>

CONFIRM PASSWORD:
<p><input type="password" name="password2" id="password2" required maxlength="20" minlength="8"/><br></p>

DATE OF BIRTH:
<p><input type="date" name="dob" id="dob"/><br></p>

PHONE NUMBER:
<p><input type="text" name="pno" id="pno" maxlength="12" /><br></p>

<input value="SIGNUP" type="submit"/>
</body>
</html>


