
<?php 
require_once('connection.php');

$sql = "SELECT * FROM job_deatils where 1";


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Manage Job Details </title>	
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- CSS code -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head> 
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Job Manage Table</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Job Title</th>
							<th scope="col">Job Description</th>
							<th scope="col">Company Name</th>
							<th scope="col">Company Email</th>
							<th scope="col">Company Phone</th>
							<th scope="col">Salary</th>
							<th scope="col">Location</th>
							<th scope="col">Job Posted Date</th>
							<th scope="col">Status</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php if($result = mysqli_query($connection, $sql)){
							if(mysqli_num_rows($result) > 0){ 		
								$i=1;						
								while($row = mysqli_fetch_assoc($result)){ ?>
									<tr>
										<th scope="row"><?php echo $i;?></th>
										<td><?php echo $row['title'];?></td>
										<td><?php echo $row['job_description'];?></td>
										<td><?php echo $row['company_name'];?></td>
										<td><?php echo $row['company_email'];?></td>
										<td><?php echo $row['company_phone'];?></td>
										<td><?php echo $row['salary'];?></td>
										<td><?php echo $row['location'];?></td>
										<td><?php echo $row['job_date'];?></td>
										<td>
											<select class="form-control" id="exampleFormControlSelect1">
												<option value="">Select status</option>
												<option value="1">Active</option>
												<option value="0">Inactive</option>
											</select>
										</td>
										<td>
											<a href="" class="btn btn-success"> Edit</a>
										</td>
									</tr>
									<?php $i++; } 
								} 
							} ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<!-- JS code -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	</body>
	</html>