<?php
    include_once "Dbconfig.php";
    class Student extends DbConfig{
        function getAllStudents(){
            $sql = "SELECT * FROM student";
            $query = mysqli_prepare($this->con,$sql);
            mysqli_stmt_execute($query);
            $res = mysqli_stmt_get_result($query);
            $resArray = array();
            while($row = mysqli_fetch_assoc($res)){
                $resArray[] = $row;
            }
            return $resArray; 
        }

        function getStudentById($id){
            $sql="SELECT * FROM student WHERE id=?;";
            $query=mysqli_prepare($this->con,$sql);
            mysqli_stmt_bind_param($query,'i',$id);
            mysqli_stmt_execute($query);
            $res=mysqli_stmt_get_result($query);
            $resRow=mysqli_fetch_assoc($res);
            return $resRow;
        }

        function insertStudent($input){
            extract($input);
            $sql="INSERT INTO `student`(`Id`, `name`, `rollno`, `subject`) 
            VALUES (NULL,?,?,?);";
            $query=mysqli_prepare($this->con,$sql);
            mysqli_stmt_bind_param($query,'sis',$name,$rollno,$subject);
            mysqli_stmt_execute($query);
            $resMsg="Inserted Successfully";
            return $resMsg;
        }
        function updateStudent($input){
            extract($input);
            $sql="UPDATE student SET name=?,rollno=?,subject=? WHERE 
            Id=?;";
            $query=mysqli_prepare($this->con,$sql);
            mysqli_stmt_bind_param($query,'sisi',$name,$rollno,$subject, 
            $id);
            mysqli_stmt_execute($query);
            $resMsg="Update Successfully";
            return $resMsg;
        }

        function deleteStudentById($id){
            $sql="DELETE FROM student WHERE Id=?;";
            $query=mysqli_prepare($this->con,$sql);
            mysqli_stmt_bind_param($query,'i',$id);
            mysqli_stmt_execute($query);
            $resMsg="Deleted Successfully";
            return $resMsg;
            }
    }
?>