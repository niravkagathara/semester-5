<?php 
if(isset($_POST["Submit"])){
    extract($_POST);

    echo "name = ".$name;
    echo "<br>email = ".$email;
    echo "<br>department = ".$department;
    echo "<br>mobile = ".$mobile;
    echo "<br>gender = ".$gender;
}
?>