<?php
	if(isset($_REQUEST['unique_id'] )){
					
		include("../classes/faculty.php");
		$obj=new faculty();
					
		$id=$_REQUEST['unique_id'];
		$firstname=$_REQUEST['first_name'];
		$lastname= $_REQUEST['last_name'];
		$status=$_REQUEST['status'];
		$email=$_REQUEST['email'];
		$telephone = $_REQUEST['telphone'];
		$officehour = $_REQUEST['office_hours'];
		$username = $_REQUEST['username'];
		$pword = $_REQUEST['password'];
		
		if(!$obj->add_faculty($id, $fname, $lname,$status,$email,$telephone,$officehour,$username,$pword)){
			echo "error adding ".mysql_error();
		}else{
			echo utf8_encode ("<h4 class = 'center'>Successfully added $id $fname $lname </h4>");
		}	
	}
?>