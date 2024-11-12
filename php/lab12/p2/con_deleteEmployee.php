<?php
include_once "./classes/employee.php";
$e = new Employee();
$deleteMsg = $e->deleteEmployeeById($_GET['id']);
header("Location:listEmployee.php");
die();
?>