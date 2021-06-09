<?php 
require_once('connection.php');
require_once('admin_header.php'); ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
    <title>admin register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    <link rel="stylesheet" type="text/css" href="style.css">

    <div class="content">
        <div class="container panel-margin">
            <div class="row row_style">
                    <div class="col-xs-6 col-xs-offset-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3>REGISTER</h3>
                              </div>
                            
                            <div class="panel-title">
                              
                            <div class="form-group">
                                <input type="text" class="form-control" name="disabled area"
                                       placeholder="To login on admin panel register here" disabled>
                            </div>
                            <form class="form" method="post" action=" ">

                            <div class=" form-container">
           
                            <div class="form-group">
                                <input type="name" class="form-control" id="name"
                                name="name"  placeholder="Name">
                                
                            </div>
                              
                             <div class=" form-container">
           
                            <div class="form-group">
                                <input type="email" class="form-control" id="email"
                                name="email"  placeholder="Email" required>
                                
                            </div>
                            <div class="form-group" >
                                <input type="password" class="form-control" id="password"
                                       name="password" placeholder="Password" required>
                            </div>
                           
                            <button type="submit" value="submit" class="btn btn-primary">submit</button>
                            </div>
                            </form>

    <?php if(isset($_POST['email']) && isset($_POST['password'])){


        $sql = mysqli_query($connection, "INSERT INTO admin (`name`,`email`,`password`) values('".$_POST['name']."','".$_POST['email']."','".$_POST['password']."')");

    ?>}
         <div class="alert alert-success alert-dismissible fade show" role="alert">
            Admin account has been successfully created.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
<!-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
    Email and password field should not be blank.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div> -->

 <?php require_once('admin_footer.php');
    ?>

