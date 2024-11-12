<?php 
    session_start();
    extract($_POST);
    if($username=="student" && $password=="student"){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        if(isset($remember)){
            setcookie('username',$username,time()+30);
            header('Location:welcome.php');
        }
        else{
            header('Location:welcome.php');
        }
    }
    else{
        echo "error";
    }

?>