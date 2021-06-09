<?php 
require_once('connection.php');
require_once('header.php'); ?>


<body>
<main class="p-5">
	<div class="container">
		<div class="row">
			<?php 
			$sql = "SELECT * FROM job_details where status = 1";
			if($result = mysqli_query($connection, $sql)){
				if(mysqli_num_rows($result) > 0){ 
					while($row = mysqli_fetch_assoc($result)){ 
						?>
						<div class="col-md-4">
							<div class="card mb-4 box-shadow">
								<div class="card-header">
									<strong><?php echo $row["title"]?></strong>
								</div>
								<div class="card-body pt-2 pb-3">
									<h5 style="font-size: 16px;">Company Name : <?php echo $row['company_name']?></h5>
									<small><strong>Email:</strong> <?php echo $row['company_email']?></small>&nbsp;&nbsp;
									<small><strong>Phone:</strong> <?php echo $row['company_phone']?></small>
									<p>
										<small><strong>Salary : ₹<?php echo $row['salary']?></strong></small>
										<br/>
										<small><strong>Location : <?php echo $row['location']?></strong></small>
										<br/>
										<span style="font-size:1rem; font-weight: 400; line-height: 16px">
											<?php echo $row['job_description']?>
										</span>
									</p>
									<div class="d-flex justify-content-between align-items-center pt-2">
										<div class="btn-group">
											<button type="button" class="btn btn-sm btn-info">Apply</button>
										</div>
										<small class="text-muted">
											<?php echo date("d/m/Y", strtotime($row['job_date']));?>
										</small>
									</div>
								</div>
							</div>
						</div>
			<?php  }
				}
			} 
			?>
		</div>
	</div>
</main>
<?php require_once('footer.php'); ?>





   