<html>
	<head>
		<title>Image Upload</title>
	</head>
	
<body>

	<form action="image_upload.php" method="post" enctype="multipart/form-data">
		Select Image:<input type="file" name="image"><br /><br />
		Description:<input type="text" name="desc"><br /><br />
		<input type="submit" name="upload" value="Upload Now">
	</form>
	
	<hr style="border:2px solid blue;">
<?php
	if(isset($_POST['upload'])){
	$image_name = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_size = $_FILES['image']['size'];
	$image_tmp_name= $_FILES['image']['tmp_name'];
	$desc = $_POST['desc'];
		

	move_uploaded_file($image_tmp_name,"photos/$image_name");
		echo "<img src='photos/$image_name' width='300' height='150'><br>$desc";	
			
}
?>
</body>
</html>