<?php
	
	include_once "DbConfig.php";
	/**
	 * 
	 */
	class Student extends DbConfig
	{
		
		function getAllstudent(){
			$sql = "SELECT * FROM student;";

			$res = mysqli_query($this->con, $sql);

			$resArray = array();

			while ($row = mysqli_fetch_assoc($res)) {
				$resArray[] = $row;
			}
			$resObj['data']=$resArray;
			return $resObj;
		}

		function insertStudent($input){
			extract($input);
			$sql = "INSERT INTO student(id, name, rollno, subject) VALUES (NULL,'$name', '$rollno', '$subject');";

			$res = mysqli_query($this->con, $sql);

			$resObj['status_code']=200;
			$resObj['message']="Insert Successfull";
			return $resObj;
		}

		function getStudentById($id){
			$sql = "SELECT * FROM student WHERE id=$id;";

			$res = mysqli_query($this->con, $sql);

			$resRow = mysqli_fetch_assoc($res);

			$resObj['data']=$resRow;
			return $resObj;
		}

		function deleteStudentById($id){
			$sql = "DELETE FROM student WHERE id=$id;";

			$res = mysqli_query($this->con, $sql);

			$resObj['status_code']=200;
			$resObj['message']="Delete Successfull";
			return $resObj;
		}

		function updateStudent($input){
			extract($input);
			$sql = "UPDATE student SET name='$name',rollno='$rollno',subject='$subject' WHERE id=$id;";

			$res = mysqli_query($this->con, $sql);

			$resObj['status_code']=200;
			$resObj['message']="Update Successfull";
			return $resObj;
		}
	}

?>