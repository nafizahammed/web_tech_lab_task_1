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

  <?php include "footer.php"?>