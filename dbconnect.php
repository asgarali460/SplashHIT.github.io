<?php 

	// Create connection
	$con = mysqli_connect("localhost","root", "");

	//Check connection
	if (!$con) {
    	die("Connection failed...\n " . mysqli_connect_error());
	}

	// Select database
	$select=mysqli_select_db($con,"openartdb"); 
	if(!$select){
		die("unable to select database..");
	}

?>