<?php
	
	include_once "./classes/Student.php";

	$s = new Student();

	$resObj = $s->getAllStudent();

	$resObj = json_encode($resObj);

	echo($resObj);

?>