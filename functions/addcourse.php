<?php
	if(isset($_REQUEST['mn'] )){
					
	include("courses.php");
	$obj=new courses();
				
	$name=$_REQUEST['mn'];
	$code=$_REQUEST['cc'];
	$objective= $_REQUEST['ob'];
	$description=$_REQUEST['dc'];
	$department=$_REQUEST['dm'];
	$semester = $_REQUEST['sm'];
	$year = $_REQUEST['yr'];
	
	
	if(!$obj->add_course($code, $name, $department,$description,$objective,$semester,$year)){
		echo "error adding ".mysql_error();
	}else{
		echo " adding $name";
	}
		echo"<a href='viewcourse.php'>Apply Changes</a>";
			
	}
	?>