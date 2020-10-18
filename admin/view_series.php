<table align="center" width="1295" border="3" bgcolor="#ff8533">

	

	<tr align="center">
		<td colspan="6"><h2>View All Series Here</h2></td>
	</tr>
	
	<tr align="center" bgcolor="skyblue">
		<th>S.N</th>
		<th>Title</th>
		<th>Image</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php 
	include("includes/db.php");
	
	$get_series = "select * from series";
	
	$run_series = mysqli_query($con, $get_series); 
	
	$i = 0;
	
	while ($row_series=mysqli_fetch_array($run_series)){
		
		$series_id = $row_series['series_id'];
		$series_title = $row_series['series_title'];
		$thumbnail = $row_series['thumbnail'];
		$i++;
	
	?>
	<tr align="center">
		<td><?php echo $i;?></td>
		<td><?php echo $series_title;?></td>
		<td><img src="thumbnail/<?php echo $thumbnail;?>" width="60" height="60"/></td>
		<td><a href="index.php?edit_series=<?php echo $series_id; ?>">Edit</a></td>
		<td><a href="delete_series.php?delete_series=<?php echo $series_id;?>">Delete</a></td>
	
	</tr>
	<?php } ?>
</table>

<?php ?>