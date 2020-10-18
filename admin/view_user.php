<table align="center" width="1295" border="3" bgcolor="#ff8533">

	
	<tr align="center">
		<td colspan="6"><h2>View All User Here</h2></td>
	</tr>
	
	<tr align="center" bgcolor="skyblue">
		<th>S.N</th>
		<th>username</th>
		<th>Email</th>
		<th>Delete</th>
	</tr>
	<?php 
	include("includes/db.php");
	
	$get_c = "select * from auser where flag='U'";
	
	$run_c = mysqli_query($con, $get_c); 
	
	$i = 0;
	
	while ($row_c=mysqli_fetch_array($run_c)){
		
		$username = $row_c['username'];
		$email = $row_c['email'];
		$i++;
	
	?>
	<tr align="center">
		<td><?php echo $i;?></td>
		<td><?php echo $username;?></td>
		<td><?php echo $email;?></td>
	
		
		<td><a href="delete_user.php?delete_user=<?php echo $username;?>">Delete</a></td>
	
	</tr>
	<?php } ?>




</table>