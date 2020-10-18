<!DOCTYPE>
<?php
session_start(); 

include("functions/function.php");

include("includes/db.php");
?>


<html>
	<head>
		<title>Series</title>
	
	<link rel="stylesheet" href="styles/style.css" media="all" />
	</head>
	
	
<body>
	<!--main starts here-->
	<div class="main_wrapper">
	
			
		<!--header starts here-->
		<div class="header_wrapper">
		
		<a href="index.php"><img id="logo" src="images/images.png" width=150px; height=150px; /></a>
		<img id="banner" src="images/banner.jpg" width=1350; height=150; />
		
		
	</div>
	
	
	<!--menu starts here-->
	<div class="menubar"> 
	
		<ul id="menu">
			<li><a href="serieslist.php">Series list</a></li>
			<li><a href="my_account.php">My Account</a></li>
			<li><a href="contact.php">Contact Us</a></li>
		
	<div id="form">
		<form method="get" action="search.php" enctype="multipart/form-date">
			<input type="text" name="user_query" placeholder="Search series" />
			<input type="submit" name="search" value="Search" />
		</form>
	</div>
	
		</ul>
		
			
	
	</div>
		
		


		
			<div id="content_area">
			
			
			
			<div id="shopping_cart"> 
					
					<span style="float:left; font-size:17px; padding:5px; line-height:40px;">


					<?php 
					if(isset($_SESSION['email'])){
					$email = $_SESSION['email'];
					
					$get_wl="select * from watchlist NATURAL JOIN series where username='$email'";
					$run_wl= mysqli_query($con,$get_wl);
					
					while($row_series=mysqli_fetch_array($run_wl)){
					$series_title = $row_series['series_title'];
					
					
					echo "<b>Currently Watching : </b>" . $series_title  . "<b style='color:yellow;'></b>" ;
					}
					}
					else {
					echo "<b></b>";
					}
					?>
					
					
					</span>


					<span style="float:right; font-size:17px; padding:5px; line-height:40px;">
					<?php 
					if(isset($_SESSION['email'])){
					echo "<b>Welcome:</b>" . $_SESSION['email'] . "<b style='color:yellow;'></b>" ;
					}
					else {
					echo "<b>Welcome Guest:</b>";
					}
					?>
					
					
					
					<?php 
					if(!isset($_SESSION['email'])){
					
					echo "<a href='login.php' style='color:orange;'>Login</a>";
					
					}
					else {
					echo "<a href='logout.php' style='color:orange;'>Logout</a>";
					}
					
					
					
					?>
					
					
					</span>
			</div>
			
				<div id="products_box">
			
			<?php 
					
					if(isset($_GET['search'])){
					
					$search_query = $_GET['user_query'];
					
					$get_series = "select * from series where keyword like '%$search_query%'";

					$run_series = mysqli_query($con, $get_series); 
					
					while($row_series=mysqli_fetch_array($run_series)){
					
						$series_id = $row_series['series_id'];
						$series_title = $row_series['series_title'];
						$thumbnail = $row_series['thumbnail'];
	
		echo "
				<div id='single_product'>
				
					<h3>$series_title</h3>
					
					<img src='admin/thumbnail/$thumbnail' width='180' height='180' />
					
					<p><b> Avelable in FHD</b></p>
					
					
					<a href='details.php?series_id=$series_id'><button style='float:center'>Watch Now</button></a>
				
				</div>
		
		
		";
					
					}
					}
	?>
				
				
				
			
				
				</div>
			
			</div>
		</div>
		
		
		<!--Content wrapper ends-->
		
		
	<!--footer starts here-->	
	<div id="bot">
	
	
	<h2 Style="text-align:center; padding-top:30px;"></h2>
	
	
	</div>
	
	
	
		
	
	
	
	
	
	</div>


</body>


</html>