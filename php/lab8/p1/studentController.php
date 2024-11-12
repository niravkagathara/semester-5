<?php
if (isset($_POST["submit"])) {
    // Retrieve form data
    $class = $_POST["class"];
    $sem = $_POST["sem"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    // Validate data
    $error=[];
    if(empty($name) || empty($email) || empty($phone) || empty($password) || empty($sem) || empty($class)){
        $error[] = "field is empty";
    }
    if(!preg_match('/^[a-zA-Z0-9]{4,20}$/',$name)){
        $error[]="enter correct name";
    }
    if($sem<0 || $sem>8){
        $error[] = "wornge sem entered";
    }
    if(!preg_match("/^[a-zA-Z0-9]+@gmail.com$/",$email)){
        $error[] = "enter correct email";
    }
    if(strlen($phone)==9){
        $error[] = "incorrect phone number";
    }
    if(!preg_match("/^[a-zA-Z0-9]{8}$/",$password)){
        $error[] = "please match password with condition";
    }
    if(empty($error)){
        header("Location:success.php");
    }
    print_r($error);
}
