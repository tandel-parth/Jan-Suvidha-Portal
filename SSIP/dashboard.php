<?php
session_start();
if(isset($_SESSION['OTPS'])){
	echo "Welcome User";
}else{
	header('location:index.php');
	die();
}
?>
<!-- <a href="logout.php">Logout</a> -->