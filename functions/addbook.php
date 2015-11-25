<?php
	if(isset($_REQUEST['book_code'] )){
					
		include("../classes/book.php");
		$obj=new book();
		
		$book_code=$_REQUEST['book_code'];		
		$name=$_REQUEST['book_name'];
		$author= $_REQUEST['author'];
		$other=$_REQUEST['other'];
		$course_code=$_REQUEST['course_code'];
		$semester = $_REQUEST['semester'];
		$year = $_REQUEST['year'];
		
		if(!$obj->add_book($book_code, $name, $author, $other, $course_code, $year, $semester)){
			echo "error adding ".mysql_error();
		}else{
			echo utf8_encode ("<h4 class = 'center'>Sucessfully added $book_code $name </h4>");
		}	
	}
?>