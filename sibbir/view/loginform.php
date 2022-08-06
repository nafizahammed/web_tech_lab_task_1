<?php include "nav.php";?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
	<center>
	<h1>Login</h1>
</head>
<body>
	<center>
	     
	     <style>
	.button{
		background-color: orange;
    color: white;
    padding: 10px;
    font-weight: bold;
    border-radius: 10%;
	}
</style> 

	<form action="../controller/loginvalidate.php" method="POST">
	    <label for="username"> Username: </label> 
		<input type="text" name="username" id="username">
		<br><br>

		<label for="password"> Password: </label> 
		<input type="password" name="password" id="password"> 
		<br><br>

		
		<input type="checkbox" name="remember" id="remember">
		<label for="remember"> Remember Me </label>  
		<br><br>

		<input class="button" type="submit" name="submit" value="Submit">
	</form>




	</center>
	<?php include "footer.php"?>
</body>
</html>