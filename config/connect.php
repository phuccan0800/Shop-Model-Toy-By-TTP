<?php
	
    $hostname = "localhost";       
	$user = "ttp-shop";
	$pass = "ttp-shop";
	$dbname = "ttp-shop";
        
	$mydb = mysqli_connect( $hostname, $user, $pass, $dbname) or die("Connection failed: " . mysqli_connect_error());
?>

