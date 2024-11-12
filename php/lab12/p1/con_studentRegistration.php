<?php
    include_once "./student.php";
    $s=new student();
    $s->insertStudent($_POST);
    header("Location:listStudents.php");
    die();
?>
