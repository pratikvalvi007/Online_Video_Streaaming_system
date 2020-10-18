<?php 
session_start();

?>
<!DOCTYPE>
<html>
	<head>
		<title>Admin Login Form</title>


	</head>
<body>
<div class="login">
<h2 style="color:blue; text-align:center;"><?php echo @$_GET['not_admin']; ?></h2>

<h2 style="color:blue; text-align:center;"><?php echo @$_GET['logged_out']; ?></h2>
	
	<h1>Admin Login</h1>
    <form method="post" action="login.php">
    	<input type="text" name="username" placeholder="text" required />
        <input type="password" name="pass" placeholder="Password" required />
        <input type="submit"  name="login"></input>
    </form>
</div>

<div>
<a> <a href="areg.php">REGISTRATION</a></a>

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
	
	$sel_user = "select * from auser where username='$usernaem' AND pass='$pass' AND flag='A'" ;
	
	$run_user = mysqli_query($con, $sel_user); 
	
	 $check_user = mysqli_num_rows($run_user); 
	
	if($check_user==1){
	
	$_SESSION['user_email']=$email; 
	
	echo "<script>window.open('index.php?logged_in=You have successfully Logged in!','_self')</script>";
	
	}
	else {
	
	echo "<script>alert('Password or Email is wrong, try again!')</script>";
	
	}
	
	
	}
	
	
	
	
	








?>