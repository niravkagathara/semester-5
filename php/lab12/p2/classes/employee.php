<?php
include_once "DbConfig.php";
class Employee extends DbConfig
{
    function getAllEmployees()
    {
        $sql = "SELECT * FROM employee;";

        $res = mysqli_query($this->con, $sql);
        $resArray = array();
        while ($row = mysqli_fetch_assoc($res)) {
            $resArray[] = $row;
        }
        return $resArray;
    }
    function insertEmployee($input)
    {
        extract($input);
        $sql = "INSERT INTO `employee`(`Id`, `name`, `department`,`city`) 
        VALUES (NULL,'$name','$department','$city')";
        $res = mysqli_query($this->con, $sql);
        $resMsg = "Inserted Successfully";
        return $resMsg;
    }
    function getEmployeeById($id)
    {
        $sql = "SELECT * FROM employee WHERE id=$id;";
        $res = mysqli_query($this->con, $sql);
        $resRow = mysqli_fetch_assoc($res);
        return $resRow;
    }
    function updateEmployee($input)
    {
        extract($input);
        $sql="UPDATE employee SET name='$name', department='$department',
        city='$city' WHERE Id='$id';";
        $res = mysqli_query($this->con, $sql);
        $resMsg = "Update Successfully";
        return $resMsg;
    }
}
