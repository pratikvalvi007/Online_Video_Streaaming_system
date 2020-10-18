<!DOCTYPE> 

<?php  
include("includes/db.php");

?>
<html>
	<head>
		<title>Inserting Series</title> 
		

	</head>
	
<body bgcolor="#FF7F63">


<div>
		
		<table align="center" width="1295" border="3" bgcolor="#ff8533">
			
			<tr align="center">
				<td colspan="7"><h2>Insert New Post Here</h2></td>
			</tr>
			
						
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
						
					echo "<li><a href='episode.php?season_id=$series_id'>$series_title</a></li>";
					
					echo "<option value='$series_id' href='insert_episode.php?season_id=$series_id'>$series_title</option>";
					
					
					}
									
									?>
								</select>
					
					
					</td>
				</tr>
			
			

		</table>
	
	
	</div>


</body> 
</html>
