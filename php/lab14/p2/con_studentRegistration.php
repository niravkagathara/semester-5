<?php
include_once "./classes/student.php";
$s=new student();
$s->insertStudent($_POST);
header("Location:listStudents.php");
die();
?>