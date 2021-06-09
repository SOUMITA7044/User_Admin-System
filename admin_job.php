<?php 
require_once('connection.php');
require_once('admin_header.php'); 
 ?>
    <?php
if(isset($_POST['submit'])){
       if(!empty($_POST['title']) && !empty($_POST['company_name']) && !empty($_POST['company_email']) && !empty($_POST['company_phone']) && !empty($_POST['salary']) && !empty($_POST['location']) && !empty($_POST['job_description']) && !empty($_POST['job_date'])){

              $sql = "INSERT INTO job_details (title, company_name, company_email,company_phone,salary,location,job_description,job_date,status) VALUES ('". $_POST["title"]."','".$_POST["company_name"]."','".$_POST["company_email"]."','".$_POST["company_phone"]."', '".$_POST["salary"]."','".$_POST["location"]."','".$_POST["job_description"]."','".$_POST["job_date"]."','1')";

              if (mysqli_query($connection, $sql)) {
                     echo "New record created successfully";
              } else {
                     echo "Error: " . $sql . "<br>" . mysqli_error($connection);
              }
       } else{
              echo "Input fields sholud not be blank.";
       }
}
      
?>



<html>
    <head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>job updatetion</title>
         <link rel="stylesheet" href="style.css">
   
    <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                        <h1> Add job requirements</h1>
                        <form class="form" method="post" action=" ">
                            <div class="form-group">
                            <label for="title"><b>Job Title:</b></label>
                            <input type="text" class="form-control" id="title"
                                   name="title" >
                            </div>

                            <div class="form-group">
                            <label for="company_name"><b>Company Name:</b></label>
                            <input type="text" class="form-control" id="company_name"
                                   name="company_name">
                            </div>

                            <div class="form-group">
                            <label for="company_email"><b>Email:</b></label>
                            <input type="text" class="form-control" id="company_email"
                                   name="company_email">
                            </div>

                            <div class="form-group">
                            <label for="company_phone"><b>Phone:</b></label>
                            <input type="text" class="form-control" id="company_phone"
                                   name="company_phone">
                            </div>

                            <div class="form-group">
                            <label for="salary"><b>Salary:</b></label>
                            <input type="text" class="form-control" id="salary"
                                   name="salary">
                            </div>

                            <div class="form-group">
                            <label for="location"><b>Location:</b></label>
                            <input type="text" class="form-control" id="location"
                                   name="location">
                            </div>

                            <div class="form-group">
                            <label for="job_description"><b>Job Description:</b></label>
                            <!-- <input type="text" class="form-control" id="job_description"
                                   name="job_description">
                            </div> -->
                            <textarea class="form-control" id="job_description" name="job_description"></textarea>

                            <div class="form-group">
                            <label for="job_date"><b>Job Date:</b></label>
                            <input type="date" class="form-control" id="job_date" name="job_date">
                            </div>                           
                            <button type="submit" value="submit"  name ="submit" class="btn btn-primary">
                                Submit</button>
                                    
                        </form>
                        
                    </div>
                </div>
                
            </div>
            
        </div>
</body>
    </html>
    <?php require_once('admin_footer.php'); ?>



