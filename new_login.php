<?php
session_start();

include "db.php";
?>
<html>
<link rel="stylesheet" type="text/css" href="new_login.css">

<head>
  <title>login</title>
</head>
<h1 align='center'> Login </h1>
<body>

<div class="loginpanel">
  <form method="post" action="login_action.php">
  <div class="txt">
    <input id="username" name="username" type="text" placeholder="Username" />
    <label for="user" class="entypo-user"></label>
  </div>
  <div class="txt">
    <input id="password" name="password" type="password" placeholder="Password" />
    <label for="pwd" class="entypo-lock"></label>
  </div>
  <div class="buttons">
    <input type="submit" value="Login" />
    <span>
      <a href="new_signup.php" class="entypo-user-add register">Register</a>
    </span>
  </div>
</form>
  
  <!div class="hr">
    <!div</div>
    <!div<!OR</div>
    <!div</div>
  <!/div>
  
  <!div class="social">
    <!a href="javascript:void(0)" class="facebook"></a>
    <! href="javascript:void(0)" class="twitter"></a>
    <!a href="javascript:void(0)" class="googleplus"></a>
  <!/div>
</div>


<span class="resp-info"></span>

</body>
</html>
