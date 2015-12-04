<?php
include_once("adb.php");

class book extends adb{

	//book constructor
	function book(){
		
	}
	
	/**
	* This adds a book to the database
	* @param $code the barcode of the book
	* @param $name the name of the book
	* @param $author the author of the book
	* @param $course_code the code of the course that uses this book
	* @param $year the year the book was used
	* @param $semester the semester the book was used
	*/
	function add_book($code, $name, $author, $other, $course_code, $year, $semester){
		$str_query = "insert into se_book set book_code = '$code', book_name = '$name', author = '$author', other_details = '$other',
						course_code = '$course_code', year = '$year', semester = '$semester'";
			
		return $this->query($str_query);		
	}
	
	/**
	* This adds a book to the database
	* @param $code the barcode of the book
	* @param $name the name of the book
	* @param $author the author of the book
	* @param $course_code the code of the course that uses this book
	* @param $year the year the book was used
	* @param $semester the semester the book was used
	*/
	function get_book_by_course($code, $semester, $year){
		$str_query="select * from se_book where course_code=$code AND semester=$semester AND year=$year";
				
			if(!$this->query($str_query)){
				return false;
			}
				
			return $this->fetch();		
	}
}
?>