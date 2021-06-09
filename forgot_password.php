<?php 
require_once('connection.php');
require_once('header.php'); 

?>
<main class="p-5">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header  text-primary"><h3>Update new Password</h3></div>
					<div class="card-body">
						<form class="form" method="post" action=" ">
							<div class="form-group">
								<div class="cols-sm-10">
									<div class="input-group">
                                    <label for="email"><b>Enter mail id:</b></label>
										<input type="text" class="form-control" name="email" id="name"/>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="cols-sm-10">
									<div class="input-group">
                                    <label for="old_password"><b>Enter your old password:</b></label>
										<input type="text" class="form-control" name="password" id="password" />
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="cols-sm-10">
									<div class="input-group">
                                    <label for="new_password"><b>Enter your new password:</b></label>
										<input type="text" class="form-control" name="new_password" id="change password"/>
									</div>
								</div>
							</div>
                            <div class="form-group">
								<div class="cols-sm-10">
									<div class="input-group">
                                    <label for="new_password"><b>Confirm your new password:</b></label>
										<input type="text" class="form-control" name="confirm_password" id="confirm password"/>
									</div>
								</div>
							</div>
                            <?php
    

    $email = $_SESSION['email'];
    $pass1 = $_POST['password'];  
    $newpass = $_POST['new_password'];
    $confpass = $_POST['confirm_password'];
    
    if($newpass == $confpass){
        $email = stripcslashes($email);  
        $pass1 = stripcslashes($pass1);  
        $email = mysqli_real_escape_string($connection, $email);  
        $pass1 = mysqli_real_escape_string($connection, $pass1);
        $sql = "select * from users where email = '$email' and password = '$pass1'";  
        $result = mysqli_query($connection, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
            
        if($count == 1){
            $data="UPDATE users SET PASSWORD='$confpass' WHERE email='$email' ";
            if ($connection->query($data) === TRUE) {
                $_SESSION['result'] = "Password updated successfully";

            } else {
                $_SESSION['result'] = "Error updating Password: " . $connection->error;
            }
        }else{  
            echo "<h1> Login failed. Invalid username or password.</h1>"; 
            $_SESSION['result'] = "enter correct password";
        }
    } else {
        $_SESSION['result'] = " password mismatch";
    }
    

    




?>











