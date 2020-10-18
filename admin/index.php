
<!DOCTYPE> 

<html>
	<head>
		<title>This is Admin Panel</title> 
		
	<link rel="stylesheet" href="style/style99.css" media="all" /> 
	</head>


<body> 

	<div class="main_wrapper">
	
	
		<div id="header"></div>
		
		<div id="right">
		<h2 style="text-align:center; ">Manage Content</h2>
			
			<a href="index.php?insert_series">Insert New Series</a>
			<a href="index.php?view_series">View All Series</a>
			<a href="index.php?insert_season">Insert New Season</a>
			<a href="index.php?view_season">View All Season</a>
			<a href="index.php?insert_episode">Insert New Epiosde</a>
			<a href="index.php?view_episode">View All Epiosde</a>
			<a href="index.php?view_user">View Users</a>
			<a href="logout.php">Admin Logout</a>
		
		</div>
		
		<div id="left">
		<h2 style="color:red; text-align:center;"></h2>
		
		
		<?php 
		if(isset($_GET['insert_series'])){
		
		include("insert_series.php"); 
		
		}
		if(isset($_GET['view_series'])){
		
		include("view_series.php"); 
		
		}
		if(isset($_GET['edit_series'])){
		
		include("edit_series.php"); 
		
		}
		if(isset($_GET['insert_season'])){
		
		include("insert_season.php"); 
		
		}
		
		if(isset($_GET['view_season'])){
		
		include("view_season.php"); 
		
		}
		
		if(isset($_GET['edit_season'])){
		
		include("edit_season.php"); 
		
		}
		
		if(isset($_GET['insert_episode'])){
		
		include("insert_episode.php"); 
		
		}
		
		if(isset($_GET['view_episode'])){
		
		include("view_episode.php"); 
		
		}
		if(isset($_GET['edit_episode'])){
		
		include("edit_episode.php"); 
		
		}
		if(isset($_GET['view_user'])){
		
		include("view_user.php"); 
		
		}
		
		?>
		</div>






	</div>


</body>
</html>

<?php  ?>