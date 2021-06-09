<?php
session_start();

session_destroy();
unset($_SESSION['id']); 
unset($_SESSION['email']);
unset($_SESSION['full_name']);

header("Location: home.php");

?>