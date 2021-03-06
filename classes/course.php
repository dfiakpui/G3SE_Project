<?php
	include_once("adb.php");
	
	class course extends adb{
	
		function course(){

		}
		
		/** This is the add_course function that adds courses into the database by taking parameters code,name,department and description
		* @param $code this is the id number of the course
		* @param $name this is the name of the course
		* @param $department this is the department that offers the course
		* @param $description this gives a vivid description of what the course entails
		* @param $objective this  gives the objective of the course
		* @param $semester  this gives the semester that the course is being offered
		* @paraam $year this shows the year that the course is being run
		*/
		function add_course($code, $name,$description,$objective,$semester,$year, $department){
			$str_query = "Insert into se_course set course_code='$code', course_name='$name', description='$description', semester='$semester', year='$year', department_name='$department'";
			return $this->query($str_query);
		}    
		
		/** 
		*This is the view a specific course code that queries the cdatabase and 
		*allows users to view a course.
		*@param $code This specifies the course by its course code
		*@param $semester This specifies the course by its semester (Spring, Summer or Year)
		*@param $year This specifies the course by its academic year (2015, 2016, ect) 
		*@return Output a view page that allow the user to view the course
		**/
		function get_course($code, $semester, $year){ 
			$str_query="select * from se_course where course_code='$code' AND semester='$semester' AND year='$year'";
				
			if(!$this->query($str_query)){
				return false;
			}
				
			return $this->fetch();
		}  

		/**
		*This is to help view all courses in the databse
		*@return output a view page where the user can view the courses he or she has added
		**/
		function get_all_courses(){ 
			$str_query="Select * from se_course";
				
			if(!$this->query($str_query)){
				return false;
			}
				
			return $this->fetch();
		}  

		/**
		* This returns all courses whose the variable $text in its name
		* @param $text the string to be searched for in the name
		* @return one row from the se_course table whose name field contains the value stored in the parameter $text.
		*/
		function search_course($text){ 
			$str_query="select * from se_course where course_name like '%$text%' OR course_code like '%$text%' OR department_name like '%$text%' OR semester like '%$text%' OR year like '%$text%'";
			
			if(!$this->query($str_query)){
				return false;
			}
				   
			return $this->fetch();
		}
	}
?>