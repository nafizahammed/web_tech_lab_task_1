<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
	<h1>Sign Up for Reseller</h1>
</head>
<body>

	<?php include "nav.php";?>
	<?php 

		$fullname = $username = $email = $password = "";
		$fullnameErrMsg = $usernameErrMsg = $emailErrMsg = $passwordErrMsg = "";


			If($_SERVER['REQUEST_METHOD'] === 'POST'){

				function check_input($data){


				$data = trim($data);
				$data = stripcslashes($data);
				$data = htmlspecialchars($data);
				return $data;

				}

			$fullname = check_input($_POST['fullname']);
			$username = check_input($_POST['username']);
			$email = check_input($_POST['email']);
			$password = check_input($_POST['password']);
			



			$message = " Registration Succesfull <a href='loginForm.php'> Login here </a>";
			if (empty($fullname)) {

				$fullnameErrMsg = "This field is required!";
			}

			else {
				if (!preg_match("/^[a-zA-Z-' ]*$/",$fullname)){

					$fullnameErrMsg = "Only letters and spaces";
				}
			}

			if (empty($username)) {

				$usernameErrMsg = "This field is required!";
			}

			if (empty($email)) {

				$emailErrMsg .= "This field is required!";
			}

			else {
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

				$emailErrMsg .= "Please correct your email";
			}
		}
						

			if (empty($password)) {

				$passwordErrMsg = "This field is required!";
			}

			
			else {

				echo $message;
			}

			/*
			if(!$fullname == "" && !$username == "" && !$email =="" && !$password == ""){


			if (isset($_REQUEST['submit'])){

			$data = '';

			$filename= 'data.json';

			if(is_file($filename)){

			$data = file_get_contents($filename);

		}

			$json_arr = json_decode($data,true);

			$json_arr[]= $arrayName = array('fullname' => $_REQUEST['fullname'] ,'username' => $_REQUEST['username'] ,'email' => $_REQUEST['email'] ,'password' => $_REQUEST['password'] ,);


			file_put_contents($filename, json_encode($json_arr));

	
		}

			} */




			//Insert value into database

			require '../model/connect.php';

if(isset($_POST['submit'])){

	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
}

$query= "INSERT INTO book_store array_values('', '$fullname', 'username', 'password', 'email')";
mysqli_query($conn, $query);
echo " <script> alert('Data inserted successfull'); </script>";



				
			}
			


	 ?>



	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate>
		<fieldset>
			<legend> Sign Up </legend>
			<label for="fname">Full Name </label> 
			<br>
			<input type="text" name="fullname" id="fname">
			<span style="color: red">*<?php echo $fullnameErrMsg; ?></span>
			<br> <br>

			<label for="username">Username</label>
			<br>
			<input type="text" name="username" id="username">
			<span style="color: red">*<?php echo $usernameErrMsg; ?></span>
			<br> <br>


			<label for="email">Email</label>
			<br>
			<input type="email" name="email" id="email">
			<span style="color: red">*<?php echo $emailErrMsg; ?></span>
			<br> <br>


			<label for="password">Password</label>
			<br>
			<input type="password" name="password" id="password">
			<span style="color: red">*<?php echo $passwordErrMsg; ?></span>
			<br> <br>

		</fieldset>

		<input type="submit" name="submit" value="Register">


 
		</form>





		<?php include "footer.php"?>

		
</body>
</html>