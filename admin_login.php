<?php 
require_once('connection.php');

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sportix Job Portal Login</title>	
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- CSS code -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head> 
<?php 

if(isset($_POST['username']) && isset($_POST['password'])){
	$query = "SELECT * FROM `admin` WHERE email='".$_POST['username']."' AND password='" . $_POST['password'] . "'";
	$result = mysqli_query($connection, $query) or die(mysql_error());
	$rows = mysqli_fetch_assoc($result);

	if (!empty($rows)) {		
		$_SESSION['id'] = $rows['id'];
		$_SESSION['email'] = $rows['email'];
		$_SESSION['full_name'] = $rows['full_name'];
		header("Location: admin_job.php");
	} else { 
		?>
		<div class="container pt-4">
			<div class="row justify-content-center align-items-center">
				<div class="col-md-6">
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Invalid username and password.
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				</div>
			</div>
		</div>
		<?php
	}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<body style="background-color:#f4f4f4">
	<main class="p-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="container">
						<div id="login-row" class="row justify-content-center align-items-center">
							<div id="login-column" class="col-md-6">
								<div id="login-box" style="    padding: 20px;background-color: #fff; border:1px solid #17a2b8;">
									<form id="login-form" class="form" action="" method="post">
										<h3 class="text-center text-info mb-5">Sportix Job Portal</h3>
										<div class="form-group">
											<label for="username" class="">Email:</label><br>
											<input type="text" name="username" id="username" class="form-control">
										</div>
										<div class="form-group">
											<label for="password" class="">Password:</label><br>
											<input type="password" name="password" id="password" class="form-control">
										</div>
										<div class="form-group">
											<input type="submit" name="submit" class="btn btn-info btn-md btn-block" value="Login">
										</div>
		
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>


	<!-- JS code -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
<?php require_once('admin_footer.php'); ?>