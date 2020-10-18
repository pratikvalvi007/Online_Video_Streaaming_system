<?php 
	include("includes/db.php"); 
	
	if(isset($_GET['delete_user'])){
	
	$delete_id = $_GET['delete_user'];
	
	$delete_user = "delete from auser where username='$delete_id'"; 
	
	$run_delete = mysqli_query($con, $delete_user); 
	
	if($run_delete){
	
	echo "<script>alert('A season has been deleted!')</script>";
	echo "<script>window.open('index.php?view_series','_self')</script>";
	}
	
	}





?>