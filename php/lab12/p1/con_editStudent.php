<?php
include_once "./student.php";
$s=new student();
$supdateMsg=$s->updateStudent($_POST);
header("Location:listStudents.php");
die();
?>