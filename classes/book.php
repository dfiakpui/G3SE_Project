<?php
include_once("adb.php");

class book extends adb{

	//book constructor
	function book(){
		
	}
	
	function add_book($code, $name, $author, $course_code, $year, $semester){
		$str_query = "insert into se_books set book_code = '$code', book_name = '$name', author = '$author',
						course_code = '$course_code', year = '$year', semester = '$semester'";
			
		return $this->query($str_query);		
	}
}
?>