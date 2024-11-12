<?php
include_once "Dbconfig.php";
    class student extends DbConfig{
        function getStudentById($id){
            $res=mysqli_query($this->con,"call SP_getStudentById('$id')");
            $resRow=mysqli_fetch_assoc($res);
            return $resRow;}
        function updateStudent($input){
            extract($input);
            $res=mysqli_query($this->con,"call SP_UpdateStudent('$id','$name','$rollno','$subject')");
            $resMsg="Update Successfully";
            return $resMsg;
            }
        function getAllStudents()
            {
            $res=mysqli_query($this->con,"call SP_GetAllStudent()");
            $resArray=array();
            while($row=mysqli_fetch_assoc($res)){
            $resArray[]=$row;
            }
            return $resArray;
            }
        function insertStudent($input){
            extract($input);
            $res=mysqli_query($this->con,"call SP_InsertStudent('$name','$rollno','$subject')");
            $resMsg="Inserted Successfully";
            return $resMsg;
            }
        function deleteStudentById($id){
            $res=mysqli_query($this->con,"call SP_DeleteStudent('$id')");
            $resMsg="Deleted Successfully";
            return $resMsg;
            }
            
    }
?>
