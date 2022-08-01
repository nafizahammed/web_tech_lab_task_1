<?php 

    require 'user.php';



    session_start();



    $list = getAll();



    $_SESSION['user_list'] = $list;



    header("Location: ../view/welcome.php");

?>



