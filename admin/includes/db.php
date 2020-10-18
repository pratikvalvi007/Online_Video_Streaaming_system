<?php

//connenting to database
$con = mysqli_connect("localhost","root","","series");

if(mysqli_connect_errno()){
echo "Failed to connect to MariaDB" . mysqli_connect_error();
}
?>