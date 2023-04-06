
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/t.css">
</head>
<body style="background:url('assets/imgs/logo.jpg'); background-size: cover;
background-repeat: no-repeat;
height: 100%; font-family: 'Numans', sans-serif;">
<div class="container">
	<div class="d-flex justify-content-center h-100">
	
	
			<?php
			if(isset($_GET['sign-up']))
			{
				?>
				<div class="card">
			<div class="card-header">
            <h3 class="text-white">Sign Up</h3>
			</div>


<div class="card-body">

				
				<form method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="sign_up_username"class="form-control" placeholder="username" required />
						
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
						<input type="text" name="sign_up_email" class="form-control"  placeholder="Email Address" required />
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="sign_up_password" class="form-control" placeholder="password" required />
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="sign_up_Re" class="form-control" placeholder="Re-Type Password" required />
					</div>
					
					<div class="d-flex justify-content-center">
						<button type="submit" name="Sign_Up_Btn"  class="btn mt-3 btn-success Register_btn">Register</button>
					</div>
				</form>	
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Already Created an account?<a href="index.php">Sign In</a>
				</div>
				
			</div>
			<?php

			}
			else{
				?>
				<div class="card">
			<div class="card-header">
            <h3 class="text-white">Sign In</h3>
			</div>

				
<div class="card-body">
				<form method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
						<input type="email" name="Login_email" class="form-control" placeholder="Email Address" required />
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="Login_password" class="form-control" placeholder="password" required />
					</div>
					
					<!-- <div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div> -->
				<div class="d-flex justify-content-center">
						<button type="submit" name="Login_Btn"  class="btn mt-3 btn-success">Login</button>
					</div>
				</form>  
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="?sign-up=1">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
				<?php
			}
			

			

			?>
			<?php
			if(isset($_GET['registered']))
			{
				?>
<span class="bg-white text-success text-center my-3"> You are Successfully Registered!!!</span>
				<?php
			}else if(isset($_GET['invalid'])){
					?>
			
			<span class="bg-white text-danger text-center my-3">Account Registration Failed!!!</span>
		<?php	
		}else if(isset($_GET['not_registered'])){
			?>
	
	<span class="bg-white text-warning text-center my-3">Account Not Found!!!</span>
<?php	
}else if(isset($_GET['invalid_Access'])){
	?>

<span class="bg-white text-danger text-center my-3">Invalid Email or Password!!!</span>
<?php	
}
			

			?>
			  
		</div>
	</div>
</div>
<script src="Res/js/bootstrap.min.js"></script>
<script src="Res/js/jquery.min.js"></script>

</body>
</html>

<?php
require_once("connect.php");
if(isset($_POST['Sign_Up_Btn']))
{
	//Temporary variable at Left side.
	$su_username = mysqli_real_escape_string($connection, $_POST['sign_up_username']);		
	$su_email = mysqli_real_escape_string($connection, $_POST['sign_up_email']);
	$su_Password =	mysqli_real_escape_string($connection, sha1($_POST['sign_up_password']));
	$su_Retype =	mysqli_real_escape_string($connection, sha1($_POST['sign_up_Re']));
	$user_role = "Customer";
	
	if($su_Password == $su_Retype)
	{
//Query to Insert  into Database.
mysqli_query($connection, "INSERT INTO users(username, email, password, user_role) VALUES('". $su_username."',
'". $su_email ."','". $su_Password."','". $user_role."')") or die(mysqli_error($connection));
?>

<!-- Copied script from invalid=1  from Below. and Changed invalid to registered-->
<script> location.assign("index.php?sign-up=1&registered=1");</script>

<?php
	}else{
		?>
<script> location.assign("index.php?sign-up=1&invalid=1");</script>


		<?php

	}

}else if(isset($_POST['Login_Btn']))
{

	$Login_Email =	mysqli_real_escape_string($connection, $_POST['Login_email']);
	$Login_password =	mysqli_real_escape_string($connection, sha1($_POST['Login_password']));

	//Query To Fetch Data.
 $FetchingData = mysqli_query($connection, "SELECT * FROM users WHERE email= '". $Login_Email."'")
 or die(mysqli_error($connection));
//Converting Into Associative Array so we can  Execute.
 

	if(mysqli_num_rows($FetchingData) > 0)
	{
		$result = mysqli_fetch_assoc($FetchingData);

		if($Login_Email == $result['email'] AND $Login_password == $result['password'] )
		{
			session_start();
			$_SESSION['user_role'] = $result['user_role'];
			$_SESSION['username'] = $result['username'];
			//$_SESSION['KEY'] = "Adminkey";
			//$_SESSION['user_role'] = "Admin";


			if($result['user_role'] == "Admin")
			{
			$_SESSION['KEY'] = "Adminkey";

				?>
					<script> location.assign("Administrator/AdminDashboard/Home.php"); </script>
				<?php

			}else{
			$_SESSION['KEY'] = "Customerskey";

				?>
				<!-- <script> location.assign("Customers/index.php"); </script> -->
				<script> location.assign("Customers/home1.php"); </script>
					<?php

			}




		}else{
			
			?>
			<script> location.assign("index.php?invalid_Access=1");</script>

			<?php
		}
	}else{
		?>
			<script> location.assign("index.php?sign-up=1&not_registered=1");</script>


<?php

	}
	 	
}
?>