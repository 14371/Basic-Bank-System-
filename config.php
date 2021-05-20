<?php
//Connecting to the Database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "zeone_bank";

	//Create a connection

	$conn = mysqli_connect($servername, $username, $password);
	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}
	else{
        echo "connection was successful";
    }


	// Create a db
	// $sql ="CREATE DATABASE zeone_bank";
	$result=mysqli_query($conn, $dbname);

	

	

	

?> 