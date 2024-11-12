<?php
	
	include_once "DbConfig.php";
	/**
	 * 
	 */
	class employee extends DbConfig
	{
		
		function getAllEmployee(){
			$sql = "SELECT * FROM employee;";

			$res = mysqli_query($this->con, $sql);

			$resArray = array();

			while ($row = mysqli_fetch_assoc($res)) {
				$resArray[] = $row;
			}
			$resObj['data']=$resArray;
			return $resObj;
		}

		function insertEmployee($input){
			extract($input);
			$sql = "INSERT INTO employee(id, name, department, city) VALUES (NULL,'$name', '$department', '$city');";

			$res = mysqli_query($this->con, $sql);

			$resObj['status_code']=200;
			$resObj['message']="Insert Successfull";
			return $resObj;
		}

		function getEmployeeById($id){
			$sql = "SELECT * FROM employee WHERE id=$id;";

			$res = mysqli_query($this->con, $sql);

			$resRow = mysqli_fetch_assoc($res);

			$resObj['data']=$resRow;
			return $resObj;
		}

		function deleteEmployeeById($id){
			$sql = "DELETE FROM employee WHERE id=$id;";

			$res = mysqli_query($this->con, $sql);

			$resObj['status_code']=200;
			$resObj['message']="Delete Successfull";
			return $resObj;
		}

		function updateEmployee($input){
			extract($input);
			$sql = "UPDATE employee SET name='$name',department='$department',city='$city' WHERE id=$id;";

			$res = mysqli_query($this->con, $sql);

			$resObj['status_code']=200;
			$resObj['message']="Update Successfull";
			return $resObj;
		}
	}

?>