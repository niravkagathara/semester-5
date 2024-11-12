<?php
include_once "./classes/employee.php";
$s=new employee();
$supdateMsg=$s->updateEmployee($_POST);
header("Location:listEmployee.php");
die();
?>