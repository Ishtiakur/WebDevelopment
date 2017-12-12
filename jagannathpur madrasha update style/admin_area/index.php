<?php
session_start();

if(!isset($_SESSION['user_email'])){
	
echo "<script>window.open('login.php?not_admin=You are not an admin!','_self')</script>";	
}
else {


?>

<!DOCTYPE>

<html>

	<head>
	<title>This is Admin Panel</title>
	<link rel="stylesheet" href="styles/style.css" media="all" />
	</head>
	
	<body>
	
	<div class="main_wrapper">
	
		<div id="header"></div>
		
		
		<div id="right">
			<h2 style="text-align;">Manage Content</h2>
				
				<a href="index.php?insert_image">Insert New Image</a>
				<a href="index.php?view_images">View All Images</a>
				<a href="logout.php">Admin Logout</a>
		
		</div>
		<div id="left">
				<h2 style="color:black; text-align:center;"><?php echo @$_GET['logged_in']; ?> </h2>
		
		
			<?php
				if(isset($_GET['insert_image'])){
					include("insert_image.php");
					
				}
			
			?>
		
		
		
		</div>
	
		
	
		
	</div>
	</body>

</html>

<?php } ?>

