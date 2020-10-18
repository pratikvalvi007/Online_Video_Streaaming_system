<?php 
	include("includes/db.php"); 
	
	if(isset($_GET['delete_season'])){
	
	$delete_id = $_GET['delete_season'];
	
	$delete_season = "delete from season where season_id = '$delete_id'"; 
	
	$run_delete = mysqli_query($con, $delete_season); 
	
	if($run_delete){
	
	echo "<script>alert('A series has been deleted!')</script>";
	echo "<script>window.open('index.php?view_season','_self')</script>";
	}
	
	}





?>