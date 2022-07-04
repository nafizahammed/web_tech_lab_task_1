<?php

	$uname = "nafiz";
	$pass = "1234";

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$remember = $_POST['remember'];

		if($username == $uname and $password == $pass){

			if(isset($_POST['remember'])){
				setcookie('username', 'password', time() + 86400 * 30);

		}
			session_start();
			$_SESSION['username'] = $username;
			header("location: welcome.php");

		}

			else{
				echo "Email or Password is Invalid";
			}



		}

	
			else{
				header("location: loginform.php");

		}


  ?>