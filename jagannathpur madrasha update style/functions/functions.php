<?php
	
	$con = mysqli_connect("localhost", "root", "", "madrasha");
	
	//getting the images
	
	function getImg(){
		global $con;
		$get_cats = "select * from table1";
		$run_cats = mysqli_query($con, $get_cats);
		
		while($row_cats=mysqli_fetch_array($run_cats)){
			
			$cat_id = $row_cats['id'];
			$cat_image = $row_cats['image'];
			$cat_title = $row_cats['image_title'];
			$cat_desc = $row_cats['image_desc'];
			$cat_date = $row_cats['time'];
		
		echo "
			<div id='single_product'>
				<h3>$cat_title</h3>
					
				<a href='admin_area/product_images/$cat_image' download>
					<img src='admin_area/product_images/$cat_image' width='400' height='400'/>
				</a>
				<br>
					$cat_desc <br>
					<b> $cat_date </b>
				
				
			</div>	
				
		
		";
		
		}
		
		
		
		
	} 


 ?>