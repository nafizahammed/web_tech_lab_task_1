<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Profile Page</title>
</head>


        <p>
        <a href="logout.php">Logout</a>
        </p>
        <p>
        <a href="welcome.php">Back to Dashboard</a>
        </p>
        <h2>Profile</h2>
        <form action="../controller/loginvalidate.php" method="POST">

        <label for="username"> Username: </label> 
        <input type="text" name="username" id="username">
        <br><br>

        <label for="fullname"> Full Name: </label> 
        <input type="text" name="fullname" id="fname">
        <br><br>

        <label for="password"> Password: </label> 
        <input type="password" name="password" id="password"> 
        <br><br>
                    <div class="inputBox">
                        <label for="photo">Photo</label>
                        <input type="file" accept="image/*" id="photo" name="photo" required>
                    </div>
                    <img src="uploads/<?php echo $row["photo"]; ?>" width="150px" height="auto" alt="">
       
            <div>
                <button type="submit" name="submit" class="btn">Update Profile</button>
            </div>
        </form>
    </div>
</body>

</html>