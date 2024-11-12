<?php
    setcookie("username", "", time() - 3600); // Expire the cookie by setting its expiration time in the past
    header("Location: login.php");
    exit(); 
?>