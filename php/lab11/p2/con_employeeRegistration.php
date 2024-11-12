<?php
    include_once "./classes/employee.php";
    $e=new Employee();
    $e->insertEmployee($_POST);
    header("Location:listEmployee.php");
    die();
?>
