<?php
	include("includes/connection.php");

	$dir = "/images/post/";
	$getimg = $conn->prepare("select * from tbl_uploaded_images where post_id = ?");
	$getimg->execute(array($_REQUEST['id']));


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="upload-image.php" method="post" enctype="multipart/form-data">
		<input type="file" name="post_image">
		<input type="submit">
	</form>

	<?php
	while ($get = $getimg->fetch()) {
		$img = $get['uploaded_image'];
		
	}
		if (!empty($img)) {
	?>
		<img src="<?php echo $dir . $img; ?>" alt="" style="height: 300px; width: 500px;">
		<!-- <video width="320" height="240" controls>
		  <source src="<?php echo $dir . $img; ?>" type="video/mp4">
		</video> -->
	<?php
		}else{
	?>
		<img src="/library/images/no-img.png" alt="">
	<?php 
		}
	
	?>
</body>
</html>