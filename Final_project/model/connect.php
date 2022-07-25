<?php 

	
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$dbname = "book_store";

		$conn = mysqli_connect($hostname, $username, $password, $dbname);

		if (mysqli_connect_errno()){
			echo "Connection Failed";
			exit();
		}

		echo "Connection success";
	
?>