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
    function deleteEmployeeById($id)
    {
        $sql = "DELETE FROM employee WHERE id=$id;";
        $res = mysqli_query($this->con, $sql);
        $resMsg = "Deleted Successfully";
        return $resMsg;
    }
}
