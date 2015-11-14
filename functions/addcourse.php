<?php
	if(isset($_REQUEST['course_code'] )){
					
		include("../classes/course.php");
		$obj=new course();
					
		$name=$_REQUEST['course_name'];
		$code=$_REQUEST['course_code'];
		$objective= $_REQUEST['objective'];
		$description=$_REQUEST['description'];
		$department=$_REQUEST['department'];
		$semester = $_REQUEST['semester'];
		$year = $_REQUEST['year'];
		
		if(!$obj->add_course($code, $name,$description,$objective,$semester,$year,$department)){
			echo "error adding ".mysql_error();
		}else{
			echo utf8_encode ("<h4 class = 'center'>Successfully added $code $name </h4>");
		}	
	}
?>