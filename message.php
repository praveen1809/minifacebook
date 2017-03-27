<?php 
include "db.php";
include "home.php";
$funame=$_GET['funame'];
$_SESSION["funame"]=$funame;
//echo $funame;
//$fname = $_GET['fname'];
$username=$_SESSION['username'];
?>


<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="message.css">
<head>
	<title>message</title>
<script type="text/javascript" src="jquery-2.1.4.min.js"></script>

</head>
<body>
	<div id="mem">
<form method="post" id="msg_form" >
MESSAGE:

<input name="uname" id="uname" type="hidden"  value="<?php echo $username?>">
<input name="funame" id="funame" type="hidden"  value="<?php echo $funame?>">
<textarea name="msg" id="msg" required=""> </textarea>
<input value="SEND" type="button" id="send">
</form>
</br></br>
<div id="message"></div>


<script >
	
$(document).ready(function(){
$("#send").click(function(){

	var mssg= $("#msg").val();
	var sender = $("#uname").val();
	var rec = $("#funame").val();
	if($.trim(mssg) != '')
	{
		//alert(mssg);
		$.ajax({
			url:"insertmsg.php",
			method:"POST",
			data:{msg:mssg,uname:sender,funame:rec},
			
			success:function(data){
				 $("#msg").val("");
//$("#mtime").val("");
				// $("#sname").val();
				 //$("#rname").val();

			}

		});

	}
});
setInterval(function(){
	$("#message").load("fetch.php").fadeIn("slow");

},1000);
});

</script>

</div>


</body>
</html>