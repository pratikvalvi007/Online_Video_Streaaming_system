<?php 
session_start();

?>
<!DOCTYPE>
<html>
	<head>
		<title>Admin Registration</title>


	</head>
<body>
<div class="login">
	<h1>Admin registration</h1>
    <form method="post" action="areg.php">
    	
		<input type="text" name="username" placeholder="username" required />
        
		<input type="password" name="pass" placeholder="Password" required />
		
		<input type="email" name="email" placeholder="email" required />
        
		<input type="submit" name="login" value="register" />
		
		<input type="submit" name="register" value="Clear" />
		
    </form>
</div>

<style>


input[type=text], select 
{
	
  width: 100%;
  padding: 12px 20px;
  margin: 10px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}


input[type=email], select 
{
	
  width: 100%;
  padding: 12px 20px;
  margin: 10px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=password], select 
{
  width: 100%;
  padding: 12px 20px;
  margin: 10px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] 
{
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 15px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</body>
</html>
<?php 

include("includes/db.php"); 
	
	if(isset($_POST['login'])){
	
		$usernaem = ($_POST['username']);
		$pass = ($_POST['pass']);
		$email = ($_POST['email']);
	
		$insert_c = "insert into auser (username,email,pass,flag) values ('$username','$email','$pass','A')";
	
		$run_c = mysqli_query($con, $insert_c); 
	
		echo "<script>alert('Account has been created successfully, Thanks!')</script>";
		echo "<script>window.open('login.php','_self')</script>";
	
	}
	
	
	
	
	








?>