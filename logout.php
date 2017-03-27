<?php
	session_start();
	unset($_SESSION['username']);
	session_destroy();
	//session_close();
	header("Location: index.php");

?>
