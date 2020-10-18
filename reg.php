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
		
		<a href="../index.php"><img id="logo" src="images/images.png" width=150px; height=150px; /></a>
		<img id="banner" src="images/banner.jpg" width=1350; height=150; />
		
		
	</div>
	
	
	<!--menu starts here-->
	<div class="menubar"> 
	
		
	<div id="form">
		<form method="get" action="result.php" enctype="multipart/form-date">
			<input type="text" name="user_query" placeholder="Serarch Products" />
			<input type="submit" name="search" value="Search" />
		</form>
	</div>
	
			
	
	</div>
		
		


		
			<div id="content_area">
			

			
			<div id="shopping_cart"> 
					
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
				
			
			
			
							<form action="reg.php" method="post" enctype="multipart/form-data">
					
					<table align="center" width="1550">
						
						<tr align="center">
							<td colspan="6"><h2>Create New Account</h2></td>
						</tr>
						
						<tr>
							<td align="right">User Name:</td>
							<td><input type="text" name="name" required/></td>
						</tr>
						
						<tr>
							<td align="right">Email:</td>
							<td><input type="email" name="email" required/></td>
						</tr>
						
						<tr>
							<td align="right">Password:</td>
							<td><input type="password" name="pass"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required></td>
						</tr>
						
					<tr align="center">
						<td colspan="6"><input type="submit" name="register" value="Create Account" colspan="6"><input type="submit" name="register" value="Clear" />
						</td>
					</tr>
					
					</table>
				
				</form>
			
					
				
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

<?php 
	if(isset($_POST['register'])){
	
		

		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];	
		
		 $insert_c = "insert into auser (username,email,pass,flag) values ('$name','$email','$pass','U')";
	
		$run_c = mysqli_query($con, $insert_c); 
		
		$insert_wl = "insert into watchlist (username) values ('$name')";
		$run_wl = mysqli_query($con, $insert_wl); 
		
		
		echo "<script>alert('Account has been created successfully, Thanks!')</script>";
		echo "<script>window.open('login.php','_self')</script>";




	}

?>