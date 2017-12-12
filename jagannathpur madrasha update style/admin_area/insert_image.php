<!DOCTYPE>
<?php
include("includes/db.php");

?>
<html>
	<head>
		<title> Inserting Image</title>
		<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
		<script>
			tinymce.init({selector:'textarea'});
		</script>	
		
	</head>
		<body bgcolor="skyblue">
		
			<form action="insert_image.php" method="post" enctype="multipart/form-data">
				<table align="center" width="788" border="2" bgcolor="#dadada" style="border-color:black">
					<tr align="center">
						<td colspan="6"><h2>Insert New Post Here</h2></td>
					</tr>
					
					<tr>
						<td align="right"> <b>Image Title </b></td>
						<td><input type="text" name="image_title" required></input></td>
					</tr>
					
					<tr>
						<td align="right"><b>Input Image </b></td>
						<td><input type="file" name="image" required></input></td>
					</tr>
					
					<tr>
						<td align="right"><b>Image Description</b></td>
						<td><textarea cols="50" rows="10" name="image_desc"> </textarea></td>
					</tr>
					
					<tr align="center">
						
						<td colspan="6"><input type="submit" name="insert_post" value="Insert Now"></input></td>
					</tr>
					
					
					
					
				</table>	
			</form>
		
		</body>

</html>

<?php
if(isset($_POST['insert_post'])){
		
		//getting the text data from the field
		$product_title = $_POST['image_title'];
		$product_desc = $_POST['image_desc'];
		
		
		//getting the image from the field
		$product_image = $_FILES['image']['name'];
		$product_image_tmp = $_FILES['image']['tmp_name'];
		
		//date time update
		
		
		//Insert in the root folder
		
		move_uploaded_file($product_image_tmp,"product_images/$product_image");  
		//end 
		
		
		//1st wrong 'products'
		 $insert_product = "insert into table1 (image_title,image_desc,image) 
		 values ('$product_title','$product_desc','$product_image')";
		 
		  $insert_pro = mysqli_query($con, $insert_product);
		  
		 if($insert_pro){
			 
			 //alert is not alart
		 echo "<script>alert('image has been inserted')</script>";
		 echo "<script>window.open('index.php?insert_image','_self')</script>";
		 
		 }
	}
	
?>


















