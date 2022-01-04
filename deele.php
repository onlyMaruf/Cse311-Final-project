<?php
include('../dbconfig.php');
	
	$info=$_GET['id'];
	
	mysqli_query($conn,"delete from user_info where user_id='$info'");
	header('location:index.php?info=display_user');
?>