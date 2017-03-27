<?php
session_start();
?>



<html>
<head>


<style>
body {
    margin: 0;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 25%;
    background-color: #330033;
    position: fixed;
    height: 100%;
    
    overflow: auto;
}

li a {
    display: block;
    color: white;
    padding: 8px 0 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: #800000;
    color: white;
}

li a:hover:not(.active) {
    background-color: #DC143C;
    color: white;
}
</style>
</head>
<body>

<div id="home">
<ul>
<li><a href="profile.php"><?php echo $_SESSION['name'];?></a></li>

<li><a href="view_profile.php">VIEW PROFILE</a></li>

<li><a href="edit_profile.php">EDIT PROFILE</a></li>

<li><a href="members.php"> MEMBERS DIRECTORY </a></li>

<li><a href="friends.php"> FRIENDS </a></li>

<li><a href="feed.php"> NEWS FEED </a></li>

<li><a href="status.php">STATUS </a></li>

<li><a href="upload.php"> UPLOAD IMAGE </a></li>

<li><a href="friend_request.php"> FRIEND REQUESTS </a></li>

<li><a href="inbox.php"> INBOX </a></li>
<li><a href="logout.php">LOGOUT</a></li>

</ul>
</div>
</body>
</html>
