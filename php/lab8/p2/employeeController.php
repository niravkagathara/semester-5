<?php
if (isset($_POST["submit"])) {
    // Retrieve form data
    $EID = $_POST["EID"];
    $department = $_POST["Department"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    // Validate data
    $error=[];
    if(empty($name) || empty($email) || empty($phone) || empty($password) || empty($EID) || empty($department)){
        $error[] = "field is empty";
    }
    if(!preg_match('/^darshan+[0-9]{5}$/',$EID)){
        $error[]="enter correct EID";
    }
    if(!preg_match('/^[a-zA-Z]{4,20}$/',$name)){
        $error[]="enter correct EID";
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
