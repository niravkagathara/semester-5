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

    function getStudentById($id){
        $sql="SELECT * FROM student WHERE id=$id;";
        $res=mysqli_query($this->con,$sql);
        $resRow=mysqli_fetch_assoc($res);
        return $resRow;
        }

    function updateStudent($input){
        extract($input);
        $sql="UPDATE student SET name='$name', rollno='$rollno',
        subject='$subject' WHERE Id='$id';";
        $res=mysqli_query($this->con,$sql);
        $resMsg="Update Successfully";
        return $resMsg;
        }
        
}
