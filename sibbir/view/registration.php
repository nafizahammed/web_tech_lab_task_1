<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
	<h1><?php include "nav.php";?></h1>
</head>

<body>


<?php

// Databse Insertion //


		require '../model/connect.php';

$conn = connect();
// insert data into the database 

$sql = "INSERT INTO reseller (fullname, username, email, password)
        VALUES (?,?,?,?)";

$stmt = $conn->stmt_init();

if( ! $stmt->prepare($sql)){
    die("SQL error" . $conn->error);
}

$stmt->bind_param("ssss", $fullname, $username, $email, $password);


if($stmt->execute()) {
    echo "SignUp successfully";
}else{
    
    die($conn->error);
}

// header("Location: ../login.php")

?>


	
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

			




			//Insert value into database


				
			}
			


	 ?>


<!--Databse connection -->





<style>
	.button{
		background-color: black;
    color: white;
    padding: 10px;
    font-weight: bold;
    border-radius: 10%;
	}
</style>

	

	<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate>
		<fieldset>
			<legend> Sign Up For Reseller</legend>
			<label for="fname">Full Name </label> 
			<br>
			<input type="text" name="fullname" id="fullname">
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

		<input class="button" type="submit" name="submit" value="Register">


 
		</form>





		<?php include "footer.php"?>

		
</body>
</html>