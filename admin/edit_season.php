
<!DOCTYPE>

<?php 

include("includes/db.php");

if(isset($_GET['edit_season'])){

	$get_id = $_GET['edit_season']; 
	
	$get_series = "select * from season where season_id='$get_id'";
	
	$run_series = mysqli_query($con, $get_series); 
	
	$i = 0;
	
	$row_series=mysqli_fetch_array($run_series);
		
		
		$season_id = $row_series['season_id'];
		$season_name = $row_series['season_name'];
		$season_no =$row_series['season_no'];

		
}
?>
<html>
	<head>
		<title>Update Season</title> 

	</head>
	
<body bgcolor="skyblue">


	<form action="edit_season.php" method="post" enctype="multipart/form-data"> 
		<table align="center" width="1295" border="3" bgcolor="#ff8533">	
			<tr align="center">
				<td colspan="7"><h2>Edit & Update Season</h2></td>
			</tr>
			
			<tr>
				<td align="right"><b>series Name:</b></td>
				<td><input type="text" name="season_name" size="60" value="<?php echo $season_name;?>"/></td>
			</tr>
			
			
			<tr>
				<td align="right"><b>Season Number:</b></td>
				<td><input type="text" name="season_no" size="60" value="<?php echo $season_no;?>"/></td>
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






