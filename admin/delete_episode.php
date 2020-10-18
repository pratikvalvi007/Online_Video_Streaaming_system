<?php 
	include("includes/db.php"); 
	
	if(isset($_GET['delete_episode'])){
	
	$delete_id = $_GET['delete_episode'];
	
	$delete_episode = "delete from episode where eid='$delete_id'"; 
	
	$run_delete = mysqli_query($con, $delete_epiosde); 
	
	if($run_delete){
	
	echo "<script>alert('A episode has been deleted!')</script>";
	echo "<script>window.open('index.php?view_episode','_self')</script>";
	}
	
	}





?>