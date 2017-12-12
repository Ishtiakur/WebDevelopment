
<!DOCTYPE>
<html>
	<head>
		<title>Login Form</title>
		<link rel="stylesheet" href="styles/login_style.css" media="all" />
	</head>
	<Body>
		<div class="login">
			<h2 style="color:white; text-align:center;"><?php echo @$_GET['not_admin']; ?></h2>

			<h2 style="color:white; text-align:center;"><?php echo @$_GET['logged_out']; ?></h2>
			
			<h1>Admin Login</h1>
			
			<form method="post">
			
				<input type="text" name="email" placeholder="Eamil" required="required" />
				<input type="password" name="password" placeholder="Password" required="required" />
				<button type="submit" class="btn btn-primary btn-block btn-large" name="login">Login</button>
			</form>
		</div>

	</body>

</html>

<?php
session_start();

include("includes/db.php");

	if(isset($_POST['login'])){
		
		$email =($_POST['email']);
		$pass =($_POST['password']);
		
		$sel_user = "select * from admin where user_email='$email' AND user_pass='$pass'";
		
		$run_user = mysqli_query($con, $sel_user);
		
		$check_user = mysqli_num_rows($run_user);
		
		if($check_user==0){
			
			echo "<script>alert('Password or Email is wrong, try again!')</script>";
		
		}
		else {
			
			$_SESSION['user_email']=$email;
			
			echo "<script>window.open('index.php?logged_in=You have successfully Logged in!','_self')</script>";
		}
		
	}



?>