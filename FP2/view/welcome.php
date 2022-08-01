<?php include "nav_cus.php"?>

<?php

		session_start();

		echo "<br><br><br>";
		echo "<center> </center>";
		echo "Welcome " . $_SESSION['username'];
		echo "<br>";
		


		if (! isset($_SESSION['username'])){
			header("Location: loginform.php");
		}

  ?>

  <?php

		if (isset($_SESSION['user_list'])){

			var_dump($_SESSION['user_list']);
		}


	  ?>

	  <br> <br>
		<a href="../model/userlist.php">Show user list</a>

  <?php include "footer.php"?>