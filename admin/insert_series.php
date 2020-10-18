<!DOCTYPE> 

<?php  
include("includes/db.php");

?>
<html>
	<head>
		<title>Inserting Series</title> 
		

	</head>
	
<body bgcolor="#FF7F63">


	<form action="insert_series.php" method="post" enctype="multipart/form-data"> 
		
		<table align="center" width="1295" border="3" bgcolor="#ff8533">
			
			<tr align="center">
				<td colspan="7"><h2>Insert New Post Here</h2></td>
			</tr>
			
			
			
			<tr>
				<td align="right"><b>Series title:</b></td>
				<td><input type="text" name="name" size="60" required /></td>
			</tr>
			
			
			
			<tr>
				<td align="right"><b>Thumbnail:</b></td>
				<td><input type="file" name="thumbnail" /></td>
			</tr>
			
			<tr>
				<td align="right"><b>Series Description:</b></td>
				<td><textarea name="series_desc" cols="20" rows="10"></textarea></td>
			</tr>
			
			<tr>
							<td align="right">Customer Country:</td>
							<td>
							<select name="language">
								<option>Select a Languag</option>
								<option>English</option>
								<option>Hindi</option>
								<option>Japanise</option>
							</select>
							
							</td>
						</tr>
			
			
			<tr>
				<td align="right"><b>Keywords:</b></td>
				<td><input type="text" name="keyword" size="50" required /></td>
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
		$name = $_POST['name'];
		$series_desc = $_POST['series_desc'];
		$language = $_POST['language'];
		$keyword = $_POST['keyword'];
		
		$thumbnail = $_FILES['thumbnail']['name'];
		$thumbnail_tmp = $_FILES['thumbnail']['tmp_name'];
		move_uploaded_file($thumbnail_tmp,"thumbnail/$thumbnail");
		
		 $insert_series = "insert into series (series_title,thumbnail,series_desc,language,keyword) values ('$name','$thumbnail','$series_desc','$language','$keyword')";
		 
		 $insert_series = mysqli_query($con, $insert_series);
		 
		 if($insert_series){
		 
		 echo "<script>alert('series Has been inserted!')</script>";
		 echo "<script>window.open('index.php?insert_series','_self')</script>";
		 
		 }
	}








?>

