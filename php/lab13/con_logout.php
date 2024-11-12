<?php 
    session_start();

    if (isset($_SESSION['username'])) {
        session_destroy();
        setcookie('username','',time()-1);
        header("Location:login.php");
    }
    else {
        setcookie('username','',time()-1);
        header("Location:login.php");
    }
?>