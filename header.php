
<?php 
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
    <title>Home page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color:#848484;
}
.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
  margin:25px;
  padding:8px;
}
.topnav input[type=text] {
  float: right;
  padding: 10px;
  margin-top: 8px;
  margin-right: 16px;
  border: none;
  font-size: 17px;
  margin:25px;
}

@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
.logo{
        float: left;
        color:#000000;
        padding-left: 18px;
        text-decoration: none;
      }
        .logo h5{
        margin:15px;
        padding:8px;
        border-radius: 5px;
        font-size: 25px;
        background: #e9e9e9;
        
     
        }
         .log{
          margin:25px;
          padding:8px;
          font-size: 20px;
        }
        .sgn {
          margin:25px;
          padding:8px;
          font-size: 20px;
        }
        .job {
          margin:25px;
          padding:8px;
          font-size: 20px;
        }
    </style>

</head>
<body>
    <nav>
    <?php //echo $_SESSION['full_name'];?>
    <div class="topnav">
        <div class="header">
            <a class="logo" href="home.php"><h5>Sportix India </h5></a>
            <a class="active" href="home.php">Home</a>
            <?php if(empty($_SESSION['full_name'])){?>					
					<a class="sgn btn btn-outline-success mr-2" href="signup.php">Sign up</a>
					<a class="log btn btn-outline-primary" href="login.php">Login</a>
          <a class="job btn btn-outline-primary" href="index.php">Job details</a>
				<?php } else{ ?>
					<div >
						<h2>	Hi, <?php echo $_SESSION['full_name']; ?></h2>
							<a class="" href="profile.php">My Profile</a>
							<a class="btn btn-danger" href="logout.php">Logout</a>
					</div>
				<?php } ?>
            <input type="text" placeholder="Search your job">
            </div>
            
        </div>
    </nav>
    </html>