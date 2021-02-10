<?php
    session_start();
    session_destroy();
    header("location: ../Cafe/Login.php");
    exit();
?>