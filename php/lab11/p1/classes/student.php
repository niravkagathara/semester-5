<?php
include_once "DbConfig.php";
class student extends DbConfig
{
    function getAllStudents()
    {
        $sql = "SELECT * FROM student;";

        $res = mysqli_query($this->con, $sql);
        $resArray = array();
        while ($row = mysqli_fetch_assoc($res)) {
            $resArray[] = $row;
        }
        return $resArray;
    }
    function insertStudent($input)
    {
        extract($input);
        $sql = "INSERT INTO `student`(`Id`, `name`, `rollno`,`subject`) 
        VALUES (NULL,'$name','$rollno','$subject')";
        $res = mysqli_query($this->con, $sql);
        $resMsg = "Inserted Successfully";
        return $resMsg;
    }
    function deleteStudentById($id)
    {
        $sql = "DELETE FROM student WHERE id=$id;";
        $res = mysqli_query($this->con, $sql);
        $resMsg = "Deleted Successfully";
        return $resMsg;
    }
}
