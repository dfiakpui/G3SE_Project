<?php
	include_once("department.php");
	$obj = new department();

	$obj = new department();
	$id=$_REQUEST['id'];
		if($obj->delete_department($id)){
			header("Location:department1.php");
			}
			
	
	//header("location:displayDepartment.php");


?>