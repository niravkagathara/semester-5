<?php
include_once "./classes/student.php";
$s=new student();
$deleteMsg=$s->deleteStudentById($_GET['id']);
header("Location:listStudents.php");
die();
?>