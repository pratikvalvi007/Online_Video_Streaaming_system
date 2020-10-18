<!DOCTYPE> 

<?php  
include("includes/db.php");

?>
<html>
	<head>
		<title>Inserting Series</title> 
		

	</head>
	
<body bgcolor="#FF7F63">


	<form action="insert_episode.php" method="post" enctype="multipart/form-data"> 
		
		<table align="center" width="1295" border="3" bgcolor="#ff8533">
			
			<tr align="center">
				<td colspan="7"><h2>Insert New Episode Here</h2></td>
			</tr>
			
			<tr>
				<td align="right"><b>Episode Name:</b></td>
				<td><input type="text" name="episode_name" size="60" required /></td>
			</tr>

			
			
			
				<tr>
								<td align="right"><b>Which season:</b></td>
								<td>
								<select name="season_id" >
									<option>Select a season</option>
									<?php 
						$get_season = "select * from season season	";
					
					$run_season = mysqli_query($con, $get_season);
					
					while ($row_season=mysqli_fetch_array($run_season)){
					
						$season_id = $row_season['season_id']; 
						$season_name = $row_season['season_name'];
					
					echo "<option value='$season_id'>$season_name</option>";
					
					
					}
									
									?>
								</select>
					
					
					</td>
				</tr>
			
			
			
			<tr>
				<td align="right"><b>Episode number:</b></td>
				<td><input type="text" name="episode_no" size="60" required /></td>
			</tr>
			
			<tr>
				<td align="right"><b>Location:</b></td>
				<td><input type="file" name="file" size="60" required /></td>
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
		$episode_name = $_POST['episode_name'];
		$season_id = $_POST['season_id'];
		$episode_no = $_POST['episode_no'];
		
		$file = $_FILES['file']['name'];
		$file_tmp = $_FILES['file']['tmp_name'];
		move_uploaded_file($file_tmp,"data/$file");
		
		 $insert_epiosde = "insert into episode (season_id,episode_no,episode_name,file) values ('$season_id','$episode_no','$episode_name','$file')";
		 
		 $insert_epiosde = mysqli_query($con, $insert_epiosde);
		 
		 if($insert_epiosde){
		 
		 echo "<script>alert('episode Has been inserted!')</script>";
		 echo "<script>window.open('index.php?insert_epiosde','_self')</script>";
		 
		 }
	}








?>

