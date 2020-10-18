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
		<form method="get" action="search.php" enctype="multipart/form-date">
			<input type="text" name="user_query" placeholder="Search series" />
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
					
					echo "<a href='reg.php' style='color:orange;'>signup</a>";
					
					}
					else {
					echo "<a href='logout.php' style='color:orange;'>Logout</a>";
					}
					
					
					
					?>
					
					
					</span>
			</div>
			
				<div id="products_box">
				
			
			
			
							<form action="login.php" method="post" enctype="multipart/form-data">
					
					<table align="center" width="1550">
						
						<tr align="center">
							<td colspan="6"><h2>LOGIN</h2></td>
						</tr>
						
						<tr>
							<td align="right">User Name:</td>
							<td><input type="text" name="name" required /></td>
						</tr>
						
						<tr>
							<td align="right">Password:</td>
							<td><input type="password"   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name="password" required ></td>
						</tr>
						
					<tr align="center">
						<td colspan="6"><input type="submit" name="login" value="login"
										colspan="6"><input type="submit" name="login" value="Clear"/></td>
					</tr>

					
					
					
					</table>
				
				</form>
<?php 
	if(isset($_POST['login'])){
	
		$email =  $_POST['name'];
		$password = $_POST['password'];
		
		$sel_c = "select * from auser where pass='$password' AND username='$email'";
		
		$run_c = mysqli_query($con, $sel_c);
 
		$check = mysqli_num_rows($run_c); 
		
		if($check==0){
		
		echo "<script>alert('Password or email is incorrect, plz try again!')</script>";
		exit();
		}
		
		
		
		
		if($check>0){
		
		$_SESSION['email']=$email; 
		
		echo "<script>alert('You logged in successfully, Thanks!')</script>";
		echo "<script>window.open('home.php','_self')</script>";
		
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