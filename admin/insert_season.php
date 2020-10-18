<!DOCTYPE> 

<?php  
include("includes/db.php");

?>
<html>
	<head>
		<title>Inserting Series</title> 
		

	</head>
	
<body bgcolor="#FF7F63">


	<form action="insert_season.php" method="post" enctype="multipart/form-data"> 
		
		<table align="center" width="1295" border="3" bgcolor="#ff8533">
			
			<tr align="center">
				<td colspan="7"><h2>Insert New Post Here</h2></td>
			</tr>
			
			<tr>
				<td align="right"><b>Season Name:</b></td>
				<td><input type="text" name="season_name" size="60" required /></td>
			</tr>
			
			
			
				<tr>
								<td align="right"><b>Which series:</b></td>
								<td>
								<select name="series_id" >
									<option>Select a series</option>
									<?php 
						$get_series = "select * from series";
					
					$run_series = mysqli_query($con, $get_series);
					
					while ($row_series=mysqli_fetch_array($run_series)){
					
						$series_id = $row_series['series_id']; 
						$series_title = $row_series['series_title'];
					
					echo "<option value='$series_id'>$series_title</option>";
					
					
					}
									
									?>
								</select>
					
					
					</td>
				</tr>
			
			
			
			<tr>
				<td align="right"><b>Season number:</b></td>
				<td><input type="text" name="season_no" size="60" required /></td>
			</tr>
			
			<tr align="center">
				<td colspan="7"><input type="submit" name="insert_post" value="Insert Season Now"/></td>
			</tr>
		
		</table>
	
	
	</form>


</body> 
</html>
<?php 

	if(isset($_POST['insert_post'])){
	
		//getting the text data from the fields
		$season_name = $_POST['season_name'];
		$series_id = $_POST['series_id'];
		$season_no = $_POST['season_no'];
		
		 $insert_series = "insert into season (series_id,season_no,season_name) values ('$series_id','$season_no','$season_name')";
		 
		 $insert_series = mysqli_query($con, $insert_series);
		 
		 if($insert_series){
		 
		 echo "<script>alert('series Has been inserted!')</script>";
		 echo "<script>window.open('index.php?insert_series','_self')</script>";
		 
		 }
	}








?>