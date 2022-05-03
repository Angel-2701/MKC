<?php
    session_start();
    session_destroy();
    //Redirect to login.php page
    header("location: login.php");
?>