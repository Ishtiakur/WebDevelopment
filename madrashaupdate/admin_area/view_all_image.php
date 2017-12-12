<?php
if(!isset($_SESSION['user_email'])){
	
echo "<script>window.open('login.php?not_admin=You are not an admin!','_self')</script>";	
}
else {
	?>
<table width="795" align="center" bgcolor="pink">

	<tr align="center">
			<td colspan="6"><h2>View All Products Here</h2></td>
	</tr>
	
	<tr align="center" bgcolor="white">
			<th>S.N</th>
			<th>Title</th>
			<th>Image</th>
			<th>Time</th>
			<th>edit</th>
			<th>Delete</th>
	</tr>
	<?php
	include("includes/db.php");
	
	$get_pro = "select * from table1";
	
	$run_pro = mysqli_query($con, $get_pro);
	
	$i = 0;
	
	while ($row_pro=mysqli_fetch_array($run_pro)){
		
		$pro_id = $row_pro['id'];
		$pro_title = $row_pro['image_title'];
		$pro_image = $row_pro['image'];
		$pro_time = $row_pro['time'];
		$i++;
		
	
	?>
	<tr align="center">
			<td><?php echo $i;?></td>
			<td><?php echo $pro_title;?></td>
			<td><img src="product_images/<?php echo $pro_image;?>" width="60" height="60" /></td>
			<td><?php echo $pro_time;?></td>
			<td><a href="index.php?edit_pro=<?php echo $pro_id; ?>">Edit</a></td>
			<td><a href="delete_img.php?delete_img=<?php echo $pro_id; ?>">Delete</a></td>
	
	</tr>
	<?php } ?>
</table>

<?php } ?>