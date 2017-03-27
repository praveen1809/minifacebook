<?php
include "db.php";
include "home.php";
$username=$_SESSION['username'];
?>


<!DOCTYPE html>

<html>
<link rel="stylesheet" type="text/css" href="message.css">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-0859-1 ">
	<title>uploading </title>
</head>
<body>
<div id='mem'>
<form method="POST" action="upload.php" enctype="multipart/form-data" >
FILE:
<input type="file" name="image">
<input type="submit" name="submit" value="upload" >

</form>

<?php 



if(!empty($_POST)){

 $file= $_FILES['image']['tmp_name'];

if(!isset($file))
echo "please select an image";

else{
$image =addslashes(file_get_contents($_FILES['image']['tmp_name']));
$image_name = addslashes( $_FILES['image']['name']);
$image_size =getimagesize($_FILES['image']['tmp_name']);
//$image = base64_encode($image);


if($image_size == FALSE)
echo "Thats not an image";

else{
	$sql="insert into images (uname,img) values ('$username','$image');";
	
	if(!(mysqli_query($db, $sql)))
		echo "Problem uploading image";
	else{
			$sql1 = mysqli_query($db,"select id as total from images order by id DESC limit 1");
			$row1=mysqli_fetch_assoc($sql1);
			$id= $row1["total"];
			$query = mysqli_query($db, "select img from images where id=$id;");
			$row = mysqli_fetch_assoc($query);
			// header("Content-type:image/jpeg");
			echo "<img src='data:image/jpeg;base64," . base64_encode($row['img']) ."'>";
		}
		// $sql1="select * from images ;";
		// $result=mysqli_query($conn,$sql1);
		// while($row=mysqli_fetch_array($result)){
		// 	$image1=$row['image'];
		// 	//header("Content-Type: image/jpeg");
		// 	echo "<img height='300' width= '300' src=$image1>";
		// }
}
}
}

 ?>

</div>
</body>

</html>

