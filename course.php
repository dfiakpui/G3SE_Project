<?php
	include_once("adb.php");
	
	class courses extends adb{
	
	function courses(){
		
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
	
	function add_course($code, $name, $department,$description,$objective,$semester,$year){
				$str_query = "Insert into se_course where course_code=$code, course_name=$name, description=$description, semester=$semester, year=$year";
				return $this->query($str_query);
		}    
    }
?>