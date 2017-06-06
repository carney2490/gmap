<?php
 $host = "127.0.0.1";
    $username = "root";
    $password = "";
    $database = "stud";

    
    $connection = mysqli_connect($host, $username, $password, $database) or die("Connection Error " . mysqli_error($connection));
if ($connection -> connect_error){
    die('connection failed');
} echo "connected successfully";

	
	
?>