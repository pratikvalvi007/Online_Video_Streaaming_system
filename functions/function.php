<?php 
 

// After uploading to online server, change this connection accordingly
$con = mysqli_connect("localhost","root","","series");

if (mysqli_connect_errno())
  {
  echo "The Connection was not established: " . mysqli_connect_error();
  }
 // getting the user IP address
  function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}
  
  
  
 
//getting the categories


function getseries(){

	if(!isset($_GET['series'])){
		

	global $con; 
	
	$get_series = "select * from series order by RAND() LIMIT 0,6";

	$run_series = mysqli_query($con, $get_series); 
	
	while($row_series=mysqli_fetch_array($run_series)){
	
		$series_id = $row_series['series_id'];
		$series_title = $row_series['series_title'];
		$thumbnail = $row_series['thumbnail'];
	
		echo "
				<div id='single_product'>
				
					<h3>$series_title</h3>
					
					<img src='admin/thumbnail/$thumbnail' width='180' height='180' />
					
					<p><b> Available in FHD</b></p>
					
					
					<a href='details.php?series_id=$series_id'><button style='float:center'>Watch Now</button></a>
				
				</div>
		
		
		";
	
	}
	
}

}

function getserieslist(){

	if(!isset($_GET['series'])){
		

	global $con; 
	
	$get_series = "select * from series";

	$run_series = mysqli_query($con, $get_series); 
	
	while($row_series=mysqli_fetch_array($run_series)){
	
		$series_id = $row_series['series_id'];
		$series_title = $row_series['series_title'];
		$thumbnail = $row_series['thumbnail'];
	
		echo "
				<div id='single_product'>
				
					<h3>$series_title</h3>
					
					<img src='admin/thumbnail/$thumbnail' width='180' height='180' />
					
					<p><b> Available in FHD</b></p>
					
					<a href='details.php?series_id=$series_id' style='float:left;'>Details</a>
					
					<a href='season.php?series_id=$series_id'><button style='float:right'>Watch Now</button></a>
				
				</div>
		
		
		";
	
	}
	
}

}

?>