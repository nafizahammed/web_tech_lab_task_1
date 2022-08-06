<?php 

		
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$dbname = "book_shops";

		$conn = mysqli_connect($hostname, $username, $password, $dbname);

		if (mysqli_connect_errno()){
			echo "Connection Failed";
			exit();
		}

		echo "Connection success";
	
	
	
?>



<?php 
	/*
		
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$dbname = "book_shop";

		$conn = new mysqli($hostname, $username, $password, $dbname);

		if ($conn->connect_error) {
			die("Connect failed.".$conn->connect_error);
		}
			//echo 'Connection Failed';
			
	*/	
?>