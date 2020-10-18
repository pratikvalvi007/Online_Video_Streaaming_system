
<table align="center" width="1295" border="3" bgcolor="#ff8533">

	

	<tr align="center">
		<td colspan="6"><h2>View All Series Here</h2></td>
	</tr>
	
	<tr align="center" bgcolor="skyblue">
		<th>S.N</th>
		<th>Title</th>
		<th>Season no</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php 
	include("includes/db.php");
	
	$get_season = "select season_id,season_no,series_title, episode no from season NATURAL JOIN series NATURAL JOIN episode";
	
	$run_season = mysqli_query($con, $get_season); 
	
	$i = 0;
	
	while ($row_season=mysqli_fetch_array($run_season)){
		
		$season_id = $row_season['season_id'];
		$season_title = $row_season['series_title'];
		$season_no = $row_season['season_no'];
		$episode_no = $row_season['episode_no'];
		$i++;
	
	?>
	<tr align="center">
		<td><?php echo $i;?></td>
		<td><?php echo $season_title;?></td>
		<td><?php echo $season_no;?></td>
		<td><a href="index.php?edit_season=<?php echo $season_id; ?>">Edit</a></td>
		<td><a href="delete_season.php?delete_season<?php echo $season_id;?>">Delete</a></td>
	
	</tr>
	<?php } ?>
</table>

<?php } ?>