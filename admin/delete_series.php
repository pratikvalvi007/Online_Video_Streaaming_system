<?php 
	include("includes/db.php"); 
	
	if(isset($_GET['delete_series'])){
	
	$delete_id = $_GET['delete_series'];
	
	$delete_series = "delete from series where series_id='$delete_id'"; 
	
	$run_delete = mysqli_query($con, $delete_series); 
	
	if($run_delete){
	
	echo "<script>alert('A season has been deleted!')</script>";
	echo "<script>window.open('index.php?view_series','_self')</script>";
	}
	
	}





?>