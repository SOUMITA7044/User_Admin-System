<?php 
require_once('connection.php');
require_once('header.php'); 

?>
<main class="p-5">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header text-center text-primary"><h4>Create your account on Sportix</h4></div>
					<div class="card-body">
						<form class="form" method="post" action=" ">
							<div class="form-group">
								<div class="cols-sm-10">
									<div class="input-group">
										<input type="text" class="form-control" name="full_name" id="name" placeholder="Enter your Full Name" />
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="cols-sm-10">
									<div class="input-group">
										<input type="text" class="form-control" name="email" id="email" placeholder="Enter your Email" />
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="cols-sm-10">
									<div class="input-group">
										<input type="text" class="form-control" name="phone" id="username" placeholder="Enter your Phone Number" />
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="cols-sm-10">
									<div class="input-group">
										<input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password" />
									</div>
								</div>
							</div>
					
							<div class="form-group">
								<div class="cols-sm-10">
									<div class="custom-file">										 
										<label >Upload your Resume : </label>
										<input type="file" name="file_name">
										<small id="emailHelp" class="form-text text-muted">File size less than 2 MB. Only JPEG, JPG, PDF and DOC file supported.</small>
									</div>
								</div>
							</div>
							<div class="form-group ">
								<button type="submit" class="btn btn-primary btn-lg btn-block login-button">Register</button>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>
</main>
<?php 
	//echo "<prE>";
	//print_r($_POST);
	//exit;
	if(isset($_POST['email']) && isset($_POST['password'])){

		if(isset($_FILES['file_name'])){ 		
			$file_name = $_FILES['file_name']['name'];	
			$file_size = $_FILES['file_name']['size'];	
			  $file_tmp =$_FILES['file_name']['tmp_name'];
			$tmp = explode('.', $file_name);
			$file_ext = strtolower(end($tmp));   	
			$extensions = ["jpeg","jpg","png","pdf","doc","docx"];
	
			if(in_array($file_ext,$extensions) === false){?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					Wrong file format. You need to check your file before upload.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php } else if($file_size > 2097152){ ?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					File size always less than 2 MB.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php } else { 
	
				$sql = mysqli_query($connection, "INSERT INTO users (`full_name`,`email`,`password`,`phone`,`upload_file`) values('".$_POST['full_name']."','".$_POST['email']."','".$_POST['password']."','".$_POST['phone']."','".$file_name."')");
	
				 move_uploaded_file($file_tmp,"uploads/".$file_name); 
			?>
				 <div class="alert alert-success alert-dismissible fade show" role="alert">
					User account has been successfully created.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php 
			}
		}
	} else { ?>
		<!-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
			Email and password field should not be blank.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div> -->
	<?php }
	
	?>




<?php require_once('footer.php'); ?>