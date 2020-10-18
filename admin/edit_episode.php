
<!DOCTYPE>

<?php 

include("includes/db.php");

if(isset($_GET['edit_episode'])){

	$get_id = $_GET['edit_episode']; 
	
	$get_series = "select * from episode where eid='$get_id'";
	
	$run_series = mysqli_query($con, $get_series); 
	
	$i = 0;
	
	$row_series=mysqli_fetch_array($run_series);
		
		
		$eid = $row_series['eid'];
		$episode_name = $row_series['episode_name'];
		$episode_no =$row_series['episode_no'];
		$file =$row_series['file'];
		
}
?>
<html>
	<head>
		<title>Update Episode</title> 

	</head>
	
<body bgcolor="skyblue">


	<form action="edit_season.php" method="post" enctype="multipart/form-data"> 
		<table align="center" width="1295" border="3" bgcolor="#ff8533">	
			<tr align="center">
				<td colspan="7"><h2>Edit & Update episode</h2></td>
			</tr>
			
			<tr>
				<td align="right"><b>Episode Name:</b></td>
				<td><input type="text" name="episode_name" size="60" value="<?php echo $episode_name;?>"/></td>
			</tr>
			
			
			<tr>
				<td align="right"><b>Episode Number:</b></td>
				<td><input type="text" name="episode_no" size="60" value="<?php echo $episode_no;?>"/></td>
			</tr>
			
			<tr>
				<td align="right"><b>File:</b></td>
				<td><input type="file" name="file" /></td>
			</tr>
			
			<tr align="center">
				<td colspan="7"><input type="submit" name="update_series" value="Update Season"/></td>
			</tr>
		
		</table>
	
	
	</form>


</body> 
</html>
<?php 

	if(isset($_POST['update_series'])){
	
		//getting the text data from the fields
		
		$update_id = $season_id;
		
		$season_name = $_POST['season_name'];
		$season_no= $_POST['season_no'];
		$season_id = $_POST['season_id'];


		
	
		 $update_series = " UPDATE season SET  season_name='$season_name',season_no='$season_no' where season_id='$update_id'
		 ";
		 
		
		 $run_series = mysqli_query($con, $update_series);
		 
		 if($run_series){
		 
		 echo "<script>alert('Product has been updated!')</script>";
		 
		 echo "<script>window.open('index.php?view_season','_self')</script>";
		 
		 }
	}








?>






