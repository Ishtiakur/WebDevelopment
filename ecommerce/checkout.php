<!DOCTYPE>
<?php
session_start();
include("functions/functions.php");

?>
<html>
	<head>
		<title> My Online Shop</title>
	    <link rel="stylesheet" href="styles/style.css" media="all"/>	
	</head>
	
	<body>
	<!--main container start from here-->
	<div class="main_wrapper">
		<!--header start from here-->
	<div class="header_wrapper"> 
			<a href="index.php"><img id="logo" src="images/Logo2.png"/> </a>
			<img id="banner" src="images/banner.jpg"/>	
	</div>	
	<!--header ends here-->
	
	<!--navagation start from here-->
	<div class="menubar">
		      
		<ul id="menu">
		<li> <a href="index.php">Home</a></li>
		<li> <a href="all_products.php">All products</a></li>
		<li> <a href="customer/my_account.php">My Account</a></li>
		<li> <a href="cart.php">Shopping cart</a></li>
		<li> <a href="#">Contack Us</a></li>
		
		</ul>	
		<div id="form">
		    <form method="get" action="results.php" enctype="multipart/form-data">
			<input type="text" name="user_query" placeholder="search a product"/>
			<input type="submit" name="search" value="search"/>
			</form>
		</div>
			  
	</div>
	<!--navagation ends  here-->
	
	<!--content_wrapper start from here-->
	<div class="content_wrapper"> 
		<div id="sidebar">
			<div id="sidebar_title">Catagory</div>
			<ul id="cats">
			<?php getCats();?>
			
			</ul>
			<div id="sidebar_title">Brands</div>
			<ul id="cats">
			<?php getBrands(); ?>
			
			</ul>
		
		
		</div>
		<div id="content_area">
		
			<?php cart();?>
			
			<div id="shopping_cart">
			
			
			<span style="float:right; font-size:18px;padding:5px;line-height:40px;">
			
			<?php
			if(isset($_SESSION['customer_email'])){
				
				echo "<b>Welcome:</b>" . $_SESSION['customer_email'] . "<b style='color:yellow;'>Your</b>";
				
			}
			else{
				echo"<b>Welcome Guest:<b/>";
				
			}
			?>



			<b style="color:yellow">Shopping Cart -</b>Total Items: <?php total_items();?> Total Price: <?php total_price(); ?> <a href="cart.php" style="color:yellow;">Go to Cart</a>
			
			
			</span>
			
				
			
			</div>
			
			<div id="products_box">
			
			<?php 
			
				if(!isset($_SESSION['customer_email'])){
					
					include("customer_login.php");
				}
				else{
					
					include("payment.php");
					
				}
			
			?>
			
			</div>
		
		</div>
	</div>
	<!--content_wrapper ends here-->
	
	<!--footer start from here-->
	   
	<div id="footer"> 
	<h2 style="text-align:center;padding-top:30px;">&copy;2016 by Anik Dash</h2>
	
	</div>
		
	</div>
	<!--footer ends here-->
	
	<!--main container ends here-->
	</body>
</html>