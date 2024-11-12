<?php 
if(isset($_POST["Submit"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $course=$_POST["course"];
    $subject=$_POST["subject"];
    $city = $_POST["city"];

    echo "name = ".$name;
    echo "<br>email = ".$email;
    echo "<br>course = ".$course;
    echo "<br>city = ".$city;
    echo "<br>subject = ".$subject;
}
?>