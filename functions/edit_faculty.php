<?php
	if(isset($_REQUEST['unique_id'] )){
					
		include("../classes/faculty.php");
		$obj=new faculty();
		
		$id=$_Request['id'];			
		$firstname=$_REQUEST['first_name'];
		$lastname=$_REQUEST['last_name'];
		$status= $_REQUEST['status'];
		$telephone=$_REQUEST['telephone'];
		$office=$_REQUEST['office'];
		$username = $_REQUEST['username'];
		$pword = $_REQUEST['pword'];
		
		if(!$obj->add_course($id,$firstname,$lastname,$status,$telephone,$office,$username,$pword)){
			echo "error adding ".mysql_error();
		}else{
			echo utf8_encode ("<h4 class = 'center'>updated successfully added $code $name </h4>");
		}	
	}
?>
	