<?php

	include("includes/db.php");
	
		if(isset($_GET['delete_img'])){

			$delete_id = $_GET['delete_img'];

			$delete_pro = "delete from table1 where id='$delete_id'";

			$run_delete = mysqli_query($con, $delete_pro);
			if($run_delete){
				
				echo "<script>alert('A Image has been deleted!')</script>";
				
		echo "<script>window.open('index.php?view_images','_self')</script>";
				
			}
}




?>