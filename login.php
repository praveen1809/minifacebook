<?php
session_start();

include "db.php";
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="login.css">

<head>
	<title>login</title>
</head>
<body>
<form method="post" action="login_action.php">
USERNAME:   
<input type="text" name="username" id="username"/>
<br/>
<br/>
PASSWORD:
<input type="password" name="password" id="password"/>
<br/>
<br/>
<input value="LOGIN" type="submit"/>
</form>
</body>
</html>


