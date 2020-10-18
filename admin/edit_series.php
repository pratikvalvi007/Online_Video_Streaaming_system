
<!DOCTYPE>

<?php 

include("includes/db.php");

if(isset($_GET['edit_series'])){

	$get_id = $_GET['edit_series']; 
	
	$get_series = "select * from series where series_id='$get_id'";
	
	$run_series = mysqli_query($con, $get_series); 
	
	$i = 0;
	
	$row_series=mysqli_fetch_array($run_series);
		
		
		$series_id = $row_series['series_id'];
		$series_title = $row_series['series_title'];
		$thumbnail =$row_series['thumbnail'];
		$series_desc =$row_series['series_desc'];
		$keyword = $row_series['keyword'];
		$language = $row_series['language'];
		
		
}
?>
<html>
	<head>
		<title>Update Series</title> 

	</head>
	
<body bgcolor="skyblue">


	<form action="edit_series.php" method="post" enctype="multipart/form-data"> 
		<table align="center" width="1295" border="3" bgcolor="#ff8533">	
			<tr align="center">
				<td colspan="7"><h2>Edit & Update series</h2></td>
			</tr>
			
			<tr>
				<td align="right"><b>series Title:</b></td>
				<td><input type="text" name="series_title" size="60" value="<?php echo $series_title;?>"/></td>
			</tr>
			
			<tr>
				<td align="right"><b>thumbnail:</b></td>
				<td><input type="file" name="thumbnail" /><img src="thumbnail/<?php echo $thumbnail ?>" width="60" height="60"/></td>
			</tr>
			
			<tr>
				<td align="right"><b>series Description:</b></td>
				<td><textarea name="series_desc" cols="20" rows="10"><?php echo $series_desc;?></textarea></td>
			</tr>
			
			<tr>
				<td align="right"><b>Keywords:</b></td>
				<td><input type="text" name="keyword" size="50" value="<?php echo $keyword;?>"/></td>
			</tr>
			
			<tr align="center">
				<td colspan="7"><input type="submit" name="update_series" value="Update series"/></td>
			</tr>
		
		</table>
	
	
	</form>


</body> 
</html>
<?php 

	if(isset($_POST['update_series'])){
	
		//getting the text data from the fields
		
		$update_id = $series_id;
		
		$series_id = $_POST['series_id'];
		$series_title = $_POST['series_title'];
		$series_desc = $_POST['series_desc'];
		$keyword = $_POST['keyword'];
		$language = $_POST['language'];
		
	
		//getting the image from the field
		$thumbnail = $_FILES['$thumbnail']['name'];
		$thumbnail_tmp = $_FILES['$thumbnail']['tmp_name'];
		
		move_uploaded_file($thumbnail_tmp,"thumbnail/$product_image");
	
		 $update_series = " UPDATE `series` SET  `series_title`='$series_title',`series_desc`='$series_desc',`thumbnail`='$thumbnail',`keyword`='$keyword',`language`='$language' where series_id='$update_id'
		 ";
		 		
		 $run_series = mysqli_query($con, $update_series);
		 
		 if($run_series){
		 
		 echo "<script>alert('Product has been updated!')</script>";
		 
		 echo "<script>window.open('index.php?view_series','_self')</script>";
		 
		 }
	}

?>






